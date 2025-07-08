<?php

namespace App\Models\Sql;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeasuringPoint extends Model
{
    protected $connection = 'sqlsrv_water';
    protected $table = 'measuring_points';
    protected $guarded = ['id'];

    public $timestamps = false;
}
