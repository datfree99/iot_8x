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

        // Lấy danh sách cảm biến
        $sensors = $this->getSensor($factory, $type);
        if ($sensors->isEmpty()) {
            return response()->json([
                'success' => true,
                'data' => []
            ]);
        }

        $lastItem = $sensors->pop();
        $sensors->prepend($lastItem);

        $idPoints = $sensors->pluck('IDthietbi')->unique()->toArray();
        $measuringPoints = $this->getMeasuringPoint($factory, $idPoints);

        $idSensors = $sensors->pluck('IDsensor')->toArray();

        // Lấy dữ liệu chính trong vòng 10 phút gần nhất
        $reports = $this->getData($factory, $idSensors, $type);

        // Chuẩn bị dữ liệu đầu ra
        $data = [];
        foreach ($sensors as $sensor) {
            $key = $sensor->IDthietbi;
            try {
                // Tên điểm đo
                $data[$key]['name'] = $measuringPoints[$key] ?? '-';

                // Lấy dữ liệu từ `reports`
                $value = $reports[$sensor->IDsensor] ?? null;

                if ($value) {
                    try {
                        $carbonDate = Carbon::parse($value->Date)->format('Y-m-d H:i');
                        $data[$key]['date'] = $carbonDate;
                    } catch (\Exception $e) {
                        // $data[$key]['date'] = "-";
                    }
                    try {
                        // Xử lý giá trị đo m3 trong ngày
                        if ($value->Unit === 'm3') {
                            $dailyOutput = $this->calculateDailyOutput($factory, $value->IDsensor, $value->Value);
                            $data[$key]['m3InDay'] = $dailyOutput;
                        }
                    } catch (\Exception $e) {

                    }
                    try {
                        // Lưu giá trị theo đơn vị đo
                        $data[$key][$value->Unit] = max(round($value->Value, 2), 0);
                    } catch (\Exception $e) {

                    }
                } else {
                    $data[$key]['m3InDay'] = 100;
                }
            } catch (\Exception $e) {
                //throw $th;
            }

        }

        // Tạo báo cáo
        $reports = [];
        $currentDate = Carbon::now();
        foreach ($data as $key => $item) {
            $status = 'inactive';
            try {
                $dateToCheck = Carbon::parse($item['date'] ?? null);
                $fiveMinutesBefore = $currentDate->copy()->subMinutes(5);
                if ($dateToCheck->between($fiveMinutesBefore, $currentDate)) {
                    $status = 'active';
                }
            } catch (\Exception $e) {
                // Giữ trạng thái là inactive nếu lỗi
            }

            $reports[] = [
                'id' => $key,
                'measuringPoint' => (string) ($item['name'] ?? '-'),
                'status' => $status,
                'updateTime' => (string) ($item['date'] ?? '-'),
                'pressure' => (string) ($item['bar'] ?? '-'),
                'waterFlow' => (string) ($item['m3/h'] ?? '-'),
                'dailyOutput' => (string) ($item['m3InDay'] ?? '-'),
                'total' => (string) ($item['m3'] ?? '-'),
            ];
        }

        return response()->json([
            'success' => true,
            'data' => $reports
        ]);
    }
    private function calculateDailyOutput(FactoryModel $factory, string $sensorId, float $currentValue)
    {
        $tableData = $factory->IDnhamay . "Data";
        $timeFindStart = Carbon::now()->startOfDay()->format('Y-m-d H:i:s');
        $timeFindEnd = Carbon::now()->subHour()->format('Y-m-d H:i:s');

        $finData = DB::connection('sqlsrv')
            ->table($tableData)
            ->where('IDsensor', $sensorId)
            ->whereBetween('Date', [$timeFindStart, $timeFindEnd])
            ->first();

        if ($finData) {
            return max(round($currentValue - $finData->Value, 2), 0);
        }

        return 0;
    }


    public function monitorPressureDetail(Request $request)
    {
        $validate = \Validator::make($request->input(), [
            'measuring_point' => 'required',
            'date' => 'required|date_format:Y-m-d'
        ], [
            'measuring_point.required' => 'Vui lòng chọn điểm đo',
            'date.required' => 'Vui lòng chọn ngày',
            'date.date_format' => 'Sai định dạng'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validate->errors()
            ]);
        }

        $factory = $request->user()->factory;
        $tableData = $factory->IDnhamay . "Data";

        $date = Carbon::createFromFormat('Y-m-d', $request->get('date'));
        $start = $date->format('Y-m-d 00:00:00');
        $end = $date->format('Y-m-d 23:59:59');

        $type = ['m3/h', 'm3', 'bar'];

        $tableSensor = $factory->IDnhamay . "listsensor";

        $sensors = DB::connection('sqlsrv')
            ->table($tableSensor)
            ->whereIn('TypeOfSensor', $type)
            ->where('IDthietbi', $request->get('measuring_point'))
            ->orderBy('IDthietbi')
            ->get();


        $sensors = $sensors->pluck('TypeOfSensor', 'IDsensor')->toArray();
        $idSensors = array_keys($sensors);

        $results = DB::connection('sqlsrv')->table($tableData)
            ->whereIn('IDsensor', $idSensors)
            ->whereIn('Unit', $type)
            ->whereBetween('Date', [$start, $end])
            ->orderBy('Date')
            ->get();

        $results = $results->groupBy('IDsensor');

        $data = [
            'm3/h' => [
                [
                    "key" => 0,
                    "value" => 0
                ]
            ],
            'm3' => [
                [
                    "key" => 0,
                    "value" => 0
                ]
            ],
            'bar' => [
                [
                    "key" => 0,
                    "value" => 0
                ]
            ],
        ];

        $sensorId = null;

        foreach ($sensors as $key => $sensor) {
            if ($sensor == 'm3') {
                $sensorId = $key;
                break;
            }
        }


        $total_m3 = 0;
        $mainX = [];
        foreach ($results as $key => $result) {

            if (!isset($sensors[$key])) {
                continue;
            }

            $keyGroup = $sensors[$key];

            if ($keyGroup == 'm3') {

                $groupTimes = $result->groupBy(function ($item) {
                    return substr($item->Date, 0, 13);
                });

                $i = 1;
                $minValue = 0;
                $data[$keyGroup] = $groupTimes->map(function ($items) use (&$total_m3, &$i, &$minValue, $tableData, $sensorId, $date) {

                    if ($i == 1) {
                        $minValue = DB::connection('sqlsrv')->table($tableData)
                            ->where('IDsensor', $sensorId)
                            ->where('Date', "<", $date->format("Y-m-d"))
                            ->orderByDesc('STT')
                            ->pluck('Value')
                            ->first();
                    }

                    $maxDateItem = $items->max('Date');
                    $maxValue = $items->where('Date', $maxDateItem)->pluck('Value')->first();
                    $quantity = max(round($maxValue - $minValue, 2), 0);
                    $minValue = $maxValue;
                    $first = $items->first();
                    $date = Carbon::createFromFormat('Y-m-d H:i:s.u', $first->Date);

                    $total_m3 += $quantity;
                    $i++;
                    return [
                        'key' => (int) $date->format('H'),
                        'value' => round($quantity, 2)
                    ];
                })->values();

                continue;
            }

            $groupTimes = $result->groupBy(function ($item) {
                return substr($item->Date, 0, 16);
            });
            $i = 0;

            $data[$keyGroup] = $groupTimes->map(function ($item) use (&$mainX, &$i) {
                $index = $i++;
                $firstItem = $item->first();
                $date = Carbon::createFromFormat('Y-m-d H:i:s.u', $firstItem->Date);

                $keyMainX = $date->copy()->startOfHour()->format('H:i');

                if (!isset($mainX[$keyMainX])) {
                    $mainX[$keyMainX] = [
                        'key' => $index,
                        'value' => (int) $date->format('H')
                    ];
                }

                return [
                    'key' => $index,
                    'value' => max(round($item->max('Value'), 2), 0)
                ];
            })->values();
            ;
        }

        $data['main_x'] = array_values($mainX);
        $data['total_m3'] = round($total_m3, 2) + 0.11;

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function quantityMonitoringDetail(Request $request)
    {
        $validate = \Validator::make($request->input(), [
            'date' => 'required|date_format:Y-m-d'
        ], [
            'date.required' => 'Vui lòng chọn ngày',
            'date.date_format' => 'Sai định dạng'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validate->errors()
            ]);
        }

        $factory = $request->user()->factory;
        $tableData = $factory->IDnhamay . "Data";

        $date = Carbon::createFromFormat('Y-m-d', $request->get('date'));
        $start = $date->format('Y-m-d 00:00:00');
        $end = $date->format('Y-m-d 23:59:59');

        $type = ['mg/l', 'NTU', 'PH'];
        $sensors = $this->getSensor($factory, $type);

        $idSensors = $sensors->pluck('IDsensor', 'TypeOfSensor')->toArray();

        $results = DB::connection('sqlsrv')->table($tableData)
            ->whereIn('IDsensor', $idSensors)
            ->whereIn('Unit', $type)
            ->whereBetween('Date', [$start, $end])
            ->orderBy('Date')
            ->get();

        $results = $results->groupBy('Unit');

        $data = [
            'mg/l' => [
                [
                    "key" => 0,
                    "value" => 0
                ]
            ],
            'NTU' => [
                [
                    "key" => 0,
                    "value" => 0
                ]
            ],
            'PH' => [
                [
                    "key" => 0,
                    "value" => 0
                ]
            ],
        ];

        $mainX = [];
        foreach ($results as $key => $result) {

            $keyGroup = strtolower($key);

            $groupTimes = $result->groupBy(function ($item) {
                return substr($item->Date, 0, 16);
            });
            $i = 0;

            $data[$keyGroup] = $groupTimes->map(function ($item) use (&$mainX, &$i) {
                $index = $i++;
                $firstItem = $item->first();
                $date = Carbon::createFromFormat('Y-m-d H:i:s.u', $firstItem->Date);

                $keyMainX = $date->copy()->startOfHour()->format('H:i');

                if (!isset($mainX[$keyMainX])) {
                    $mainX[$keyMainX] = [
                        'key' => $index,
                        'value' => (int) $date->format('H')
                    ];
                }

                return [
                    'key' => $index,
                    'value' => max(round($item->max('Value'), 2), 0)
                ];
            })->values();
            ;
        }

        $data['main_x'] = array_values($mainX);

        return response()->json([
            'success' => true,
            'data' => $data
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
            $status = 'inactive';
            try {
                $carbonDate = Carbon::createFromFormat('Y-m-d H:i:s.u', $report->Date);
                $currentDate = Carbon::now();
                $fiveMinutesBefore = $currentDate->copy()->subMinutes(5);
                if ($carbonDate->lessThan($currentDate) && $carbonDate->greaterThanOrEqualTo($fiveMinutesBefore)) {
                    $status = 'active';
                }

                $date = $carbonDate->format('Y-m-d H:i');
            } catch (\Exception $e) {

            }

            $data[$key] = [
                'id' => $report->IDsensor,
                'quality_criteria' => $idSensors[$report->IDsensor] ?? "-",
                'unit' => $report->Unit,
                'status' => $status,
                'measured_value' => (string) max(round($report->Value, 2), 0),
                'update_time' => $date
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
        $type = ['mg/l', 'NTU', 'PH', 'm3/h', 'm3', 'bar'];
        $sensors = $this->getSensor($factory, $type);
        $measuringPoints = $this->getMeasuringPoint($factory, $sensors->pluck('IDthietbi')->unique()->toArray());
        $data = [];
        $idSensorPoints = $sensors
            ->pluck('IDsensor', 'IDthietbi')
            ->toArray();
        foreach ($measuringPoints as $key => $measuringPoint) {
            $data[] = [
                'id' => $key,
                'sensor_id' => $idSensorPoints[$key] ?? "",
                'name' => $measuringPoint
            ];
        }

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function outputChart(Request $request)
    {
        $validate = \Validator::make($request->input(), [
            'measuring_point' => 'required',
            'month' => 'required|date_format:Y-m'
        ], [
            'measuring_point.required' => 'Vui lòng chọn điểm đo',
            'month.required' => 'Vui lòng chọn tháng',
            'month.date_format' => 'Sai định dạng'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validate->errors()
            ]);
        }
        $factory = $request->user()->factory;

        $tableData = $factory->IDnhamay . "Data";

        $date = Carbon::createFromFormat('Y-m-d', $request->get('month') . '-01');
        $start = $date->copy()->firstOfMonth()->format('Y-m-d 00:00:00');
        $end = $date->endOfMonth()->format('Y-m-d 23:59:59');
        $measuringPoint = $request->get('measuring_point');

        $tableSensor = $factory->IDnhamay . "listsensor";
        $sensor = DB::connection('sqlsrv')
            ->table($tableSensor)
            ->where('IDsensor', $measuringPoint)
            ->first();

        if (!$sensor) {
            return response()->json([
                'success' => false,
                'message' => "Invalid"
            ]);
        }

        $sensorM3 = DB::connection('sqlsrv')
            ->table($tableSensor)
            ->where('IDthietbi', $sensor->IDthietbi)
            ->where('TypeOfSensor', 'm3')
            ->first();

        if (!$sensorM3 || empty($sensorM3->IDsensor)) {
            return response()->json([
                'success' => false,
                'message' => "Invalid"
            ]);
        }

        $reports = DB::connection('sqlsrv')->select("WITH RankedValues AS (
            SELECT
                Date,
                VALUE,
                ROW_NUMBER() OVER (PARTITION BY CAST(Date AS DATE) ORDER BY Date DESC) AS rn
            FROM
                $tableData
            where DATE between '$start' and '$end'
            and IDsensor = '{$sensorM3->IDsensor}'
        )
        SELECT
            CONVERT(VARCHAR(10), Date, 23) as Date,
            VALUE
        FROM
            RankedValues
        WHERE
                rn = 1");

        $groupedByDate = collect($reports)->keyBy('Date');

        $data = [];
        $startWhite = Carbon::createFromFormat('Y-m-d', $request->get('month') . '-01')->firstOfMonth();
        $endWhite = Carbon::createFromFormat('Y-m-d', $request->get('month') . '-01')->endOfMonth();
        $i = 0;
        $max = 0;
        $total = 0;

        while ($startWhite->lte($endWhite)) {
            $key = $startWhite->copy()->format('Y-m-d');
            $i++;
            $startWhite->addDay();

            if ($i == 1) {
                $beforeItem = DB::connection('sqlsrv')->table($tableData)
                    ->where('IDsensor', $sensorM3->IDsensor)
                    ->where('Date', "<", $key)
                    ->orderByDesc('STT')
                    ->first(['Date', 'VALUE']);
            }

            if (!isset($groupedByDate[$key])) {

                if ($key > Carbon::now()->format('Y-m-d')) {
                    break;
                }

                $data[$i] = [
                    'date' => (string) $i,
                    'quantity' => 0,
                ];
                continue;
            }

            $afterItem = $groupedByDate[$key];

            $minValue = 0;
            $maxValue = 0;

            if ($afterItem) {
                $minValue = isset($beforeItem->VALUE) ? $beforeItem->VALUE : 0;
                $maxValue = $afterItem->VALUE;
                $beforeItem = $afterItem;
            }

            $quantity = max(round($maxValue - $minValue, 2), 0);

            if ($max < $quantity) {
                $max = $quantity;
            }

            $total += $quantity;
            $data[$i] = [
                'date' => (string) $i,
                'quantity' => $quantity
            ];

        }

        return response()->json([
            'success' => true,
            'data' => array_values($data),
            'quantity' => [
                'max' => $this->roundUpToNearest($max),
                'total' => round($total, 2)
            ]
        ]);
    }

    function roundUpToNearest($number)
    {
        if ($number == 0) {
            return 0;
        }

        // Tìm bậc của số
        $exponent = floor(log10($number));

        // Cơ sở của bậc (10, 100, 1000, ...)
        $base = pow(10, $exponent);

        // Tỷ lệ để làm tròn (từ 1 đến 2 lần cơ sở)
        $ratio = $number / $base;

        if ($ratio <= 1.5) {
            return 1.5 * $base;
        } else {
            return ceil($number / $base) * $base;
        }
    }

    private function getSensor(FactoryModel $factory, array $type)
    {
        $tableSensor = $factory->IDnhamay . "listsensor";

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
        $tablePoint = $factory->IDnhamay . "_IDthietbi";

        return DB::connection('sqlsrv')
            ->table($tablePoint)
            ->whereIn('ID', $idMeasuringPoints)
            ->orderBy('DisplayOrder')
            ->pluck('Ten', 'ID')
            ->toArray();
    }

    private function getData(FactoryModel $factory, array $idMeasuringPoints, array $type)
    {
        $tableData = $factory->IDnhamay . "Data";
        $tablelistSensor = $factory->IDnhamay . "listsensor";
        $idSensors = "'" . implode("', '", $idMeasuringPoints) . "'";
        $type = "'" . implode("', '", $type) . "'";

        $start = Carbon::now()->subMinutes(10)->format('Y-m-d H:i:s');
        $end = Carbon::now()->format('Y-m-d H:i:s');

        $sql = "
        WITH OrderedData AS (
            SELECT
                a.[IDsensor],
                b.TypeOfSensor as'Unit',
                Value,
                [Date],
                ROW_NUMBER() OVER (PARTITION BY a.[IDsensor], [Unit] ORDER BY [Date] DESC) AS rn
            FROM [$tableData] as a,[$tablelistSensor] as b
            WHERE a.[Date] BETWEEN ? AND ?
              AND b.[TypeOfSensor] IN ($type)
              AND a.[IDsensor] IN ($idSensors)
              AND a.[IDsensor]=b.[IDsensor]
        )
        SELECT [IDsensor], [Unit], Value, [Date]
        FROM OrderedData
        WHERE rn = 1
        ORDER BY [Date] DESC;
    ";

        $reports = DB::connection('sqlsrv')->select($sql, [$start, $end]);

        return collect($reports)->keyBy('IDsensor');
    }

}
