<?php

namespace App\Models\Sql;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    protected $connection = 'sqlsrv_water';
    protected $table = 'sensors';
    protected $guarded = ['id'];

    public $timestamps = false;
}
