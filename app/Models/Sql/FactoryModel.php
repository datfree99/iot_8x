<?php

namespace App\Models\Sql;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Sql\FactoryModel
 *
 * @property int|null $ID
 * @property string|null $IDnhamay
 * @property string|null $Name
 * @property string|null $Address
 * @method static \Illuminate\Database\Eloquent\Builder|FactoryModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FactoryModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FactoryModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|FactoryModel whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FactoryModel whereID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FactoryModel whereIDnhamay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FactoryModel whereName($value)
 * @mixin \Eloquent
 */
class FactoryModel extends Model
{
    protected $connection = 'sqlsrv';
    protected $table = 'factories';
    protected $guarded = ["ID"];

}
