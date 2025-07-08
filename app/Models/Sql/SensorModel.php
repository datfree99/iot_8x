<?php

namespace App\Models\Sql;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sql\SensorModel
 *
 * @property int $ID
 * @property string $IDsensor
 * @property string|null $TypeOfSensor
 * @property string|null $Location
 * @property int|null $IDthietbi
 * @method static \Illuminate\Database\Eloquent\Builder|SensorModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SensorModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SensorModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|SensorModel whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SensorModel whereIDsensor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SensorModel whereIDthietbi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SensorModel whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SensorModel whereTypeOfSensor($value)
 * @mixin \Eloquent
 */
class SensorModel extends Model
{
    static $changeTable = "";
    protected $connection = 'sqlsrv_water';
    protected $table = 'nhamay1listsensor';

}
