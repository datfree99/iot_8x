<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sql\FactoryModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function monitorPressure(Request $request)
    {
        $factory = $request->user()->factory;

        $type = ['m3/h', 'm3', 'bar'];

        $sensors = $this->getSensor($factory, $type);

        $idPoints = $sensors->pluck('IDthietbi')->unique()
            ->toArray();

        $measuringPoints = $this->getMeasuringPoint($factory, $idPoints);

        $tableData = $factory->IDnhamay . "Data";
        $idSensors = $sensors->pluck('IDsensor')->toArray();
        $reports = $this->getData($factory, $idSensors, $type);

        $data = [];
        foreach ($sensors as $sensor) {
            $key = $sensor->IDthietbi;

            if (!isset($data[$key])) {
                $data[$key]['name']  = $measuringPoints[$key] ?? '-';
            }

            if (isset($reports[$sensor->IDsensor])) {
                $value = $reports[$sensor->IDsensor];
            }else {
                $value = DB::connection('sqlsrv')->table($tableData)
                    ->where('IDsensor', $sensor->IDsensor)
                    ->whereIn('Unit', $type)
                    ->whereNotNull('Date')
                    ->orderByDesc('Date')
                    ->first();

                if(!$value){
                    continue;
                }
            }

            try {
                $carbonDate = Carbon::createFromFormat('Y-m-d H:i:s.u', $value->Date)->format('Y-m-d H:i');
                if (!isset($data[$key]['date']) || $data[$key]['date'] < $carbonDate) {
                    $data[$key]['date'] = $carbonDate;
                }
            }catch (\Exception $e){
                $data[$key]['date'] = "-";
            }

            $data[$key][$value->Unit] = round($value->Value, 2);
        }

        return response()->json([
            'success' => true,
            'data' => array_values($data)
        ]);
    }

    public function quantityMonitoring(Request $request)
    {
        $factory = $request->user()->factory;

        $type = ['mg/l', 'NTU', 'PH'];
        $sensors = $this->getSensor($factory, $type);

        $idSensors = $sensors->pluck('Location', 'IDsensor')->toArray();
        $keySensor = array_keys($idSensors);

        $reports = $this->getData($factory, $keySensor, $type);

        $data = [];
        foreach ($reports as $report) {
            $key = $report->IDsensor . $report->Unit;

            $date = "-";
            try {
                $carbonDate = Carbon::createFromFormat('Y-m-d H:i:s.u', $report->Date)->format('Y-m-d H:i');
                $date = $carbonDate;
            }catch (\Exception $e){
            }

            $data[$key] = [
                'Name' => $idSensors[$report->IDsensor] ?? "-",
                'Unit' => $report->Unit,
                'Value' => round($report->Value, 2),
                'Date' => $date
            ];
        }

        return response()->json([
            'success' => true,
            'data' => array_values($data)
        ]);
    }

    public function sensor(Request $request)
    {
        $factory = $request->user()->factory;
        $type = ['m3'];
        $sensors = $this->getSensor($factory, $type);
        $measuringPoints = $this->getMeasuringPoint($factory, $sensors->pluck('IDthietbi')->unique()->toArray());
        $data = [];
        $idSensorPoints = $sensors->pluck('IDsensor', 'IDthietbi')->toArray();
        foreach ($measuringPoints as $key => $measuringPoint) {
            $data[] = [
                'ID' => $idSensorPoints[$key] ?? $key,
                'Name' => $measuringPoint
            ];
        }

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function outputChart(Request $request)
    {
        $validate = \Validator::make($request->input(),[
            'measuring_point' => 'required',
            'month' => 'required|date_format:Y-m'
        ], [
            'measuring_point.required' => 'Vui lòng chọn điểm đo',
            'month.required' => 'Vui lòng chọn tháng',
            'month.date_format' => 'Sai định dạng'
        ]);

        if ($validate->fails()){
            return response()->json([
                'success' => false,
                'message' => $validate->errors()
            ]);
        }
        $factory = $request->user()->factory;

        $tableData = $factory->IDnhamay . "Data";

        $date = Carbon::createFromFormat('Y-m-d', $request->get('month'). '-01');
        $start = $date->copy()->firstOfMonth()->format('Y-m-d 00:00:00');
        $end = $date->endOfMonth()->format('Y-m-d 23:59:59');
        $reports = DB::connection('sqlsrv')->table($tableData)
            ->where('IDsensor', $request->get('measuring_point'))
            ->whereBetween('Date', [$start, $end])
            ->get();

        $groupedByDate = $reports->groupBy(function ($item) {
            return substr($item->Date, 0, 10);
        });

        $result = $groupedByDate->map(function ($items, $key) {
            $maxDateItem = $items->max('Date');
            $minDateItem = $items->min('Date');
            $maxValue = $items->where('Date', $maxDateItem)->pluck('Value')->first();
            $minValue = $items->where('Date', $minDateItem)->pluck('Value')->first();
            return [
                'Date' => substr($key, 8),
                'Value' => round($maxValue - $minValue, 2)
            ];
        })->values();

        return response()->json([
            'success' => true,
            'data' => $result
        ]);
    }


    private function getSensor(FactoryModel $factory, array $type)
    {
        $tableSensor = $factory->IDnhamay. "listsensor";

        return DB::connection('sqlsrv')
            ->table($tableSensor)
            ->whereIn('TypeOfSensor', $type)
            ->whereNotNull('IDthietbi')
            ->where('IDthietbi', '<>', 0)
            ->orderBy('IDthietbi')
            ->get();
    }

    private function getMeasuringPoint(FactoryModel $factory, array $idMeasuringPoints)
    {
        $tablePoint = $factory->IDnhamay. "_IDthietbi";

        return DB::connection('sqlsrv')
            ->table($tablePoint)
            ->whereIn('ID', $idMeasuringPoints)
            ->pluck('Ten', 'ID')
            ->toArray();
    }

    private function getData(FactoryModel $factory, array $idMeasuringPoints, array $type)
    {
        $tableData = $factory->IDnhamay . "Data";

        $idSensors = "'" . implode("', '", $idMeasuringPoints) . "'";
        $type = "'" . implode("', '", $type) . "'";

        $start = Carbon::now()->subMinutes(10)->format('Y-m-d H:i:s');
        $end = Carbon::now()->format('Y-m-d H:i:s');

        $reports = DB::connection('sqlsrv')->select("WITH OrderedData AS (SELECT [IDsensor], [Unit], Value, [Date], ROW_NUMBER() OVER (PARTITION BY [IDsensor], [Unit] ORDER BY [Date] DESC) AS rn
        FROM [$tableData]
        WHERE [Date] BETWEEN '$start' AND '$end'
        AND [Unit] IN ($type)
        AND [IDsensor] IN ($idSensors)) SELECT [IDsensor], [Unit], Value, [Date] FROM OrderedData WHERE rn = 1 ORDER BY [Date] DESC;");

        return collect($reports)->keyBy('IDsensor');
    }
}
