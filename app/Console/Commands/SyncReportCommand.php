<?php

namespace App\Console\Commands;

use App\Models\Sql\Factories;
use App\Models\Sql\MeasuringPoint;
use App\Models\Sql\Sensor;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SyncReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:reports';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';


    public function handle()
    {
        $factories = DB::connection('sqlsrv')->table('factories')
            ->get();
        $results = [];
        foreach ($factories as $factory) {
           $item = Factories::create([
               'uni_key' => $factory->IDnhamay,
                'name' => $factory->Name,
                'address' => $factory->Address
            ]);

           $results[] = [
               'id' => $item->id,
               'uni_key' => $item->uni_key
           ];
        }

        $newResults = [];
        foreach ($results as &$result) {
            $factory_name = $result['uni_key'] . "_IDthietbi";

            $measuringPoints = DB::connection('sqlsrv')->table($factory_name)
                ->get();

            foreach ($measuringPoints as $measuringPoint) {
                 $measuringPoint = MeasuringPoint::create([
                    'factory_id' => $result['id'],
                    'name' => $measuringPoint->Ten,
                    'index' => (int) $measuringPoint->DisplayOrder,
                ]);

                $newResults[] =  [
                    'measuring_point_id' => $measuringPoint->id,
                    'id' => $result['id'],
                    'uni_key'=> $result['uni_key']
                ];
            }
        }

        foreach ($newResults as $value) {
            $factory_name = $value['uni_key'] . "listsensor";

            $sensors = DB::connection('sqlsrv')->table($factory_name)
                ->get();

            foreach ($sensors as $sensor) {
                if (empty($sensor->TypeOfSensor)) {
                    continue;
                }

                Sensor::create([
                    'factory_id' => $value['id'],
                    'measuring_point_id' => $value['measuring_point_id'],
                    'type' => $sensor->TypeOfSensor,
                    'sensor' => $sensor->IDsensor,
                    'location' => $sensor->Location
                ]);
            }
        }


    }
}
