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
            'reports' => array_values($data)
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
            'reports' => array_values($data)
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
