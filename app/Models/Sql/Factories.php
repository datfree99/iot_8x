<?php

namespace App\Models\Sql;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factories extends Model
{
    protected $connection = 'mysql';

    protected $table = 'factories';

    protected $guarded = ['id'];

}
