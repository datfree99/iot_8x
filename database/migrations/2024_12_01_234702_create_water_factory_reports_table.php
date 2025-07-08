<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterFactoryReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection("sqlsrv_water")->create('factories', function (Blueprint $table) {
            $table->id();
            $table->string("uni_key");
            $table->string("name");
            $table->string("address");
            $table->timestamps();

            $table->index('uni_key');
        });

        Schema::connection("sqlsrv_water")->create('measuring_points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("factory_id");
            $table->string("name");
            $table->integer("index")->nullable();

            $table->index('factory_id');
        });

        Schema::connection("sqlsrv_water")->create('sensors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("factory_id");
            $table->unsignedBigInteger("measuring_point_id");
            $table->string("type");
            $table->string("sensor");
            $table->string("location")->nullable();

            $table->index('factory_id');
            $table->index('measuring_point_id');
        });

        Schema::connection("sqlsrv_water")->create('anbinh_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("sensor_id");
            $table->date("date");
            $table->float("value");
            $table->dateTime("created_at");

            $table->index('sensor_id');
            $table->index('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection("sqlsrv_water")->dropIfExists('factories');
        Schema::connection("sqlsrv_water")->dropIfExists('measuring_points');
        Schema::connection("sqlsrv_water")->dropIfExists('sensors');
        Schema::connection("sqlsrv_water")->dropIfExists('anbinh_reports');
    }
}
