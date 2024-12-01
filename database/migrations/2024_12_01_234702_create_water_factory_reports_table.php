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
        Schema::create('factories', function (Blueprint $table) {
            $table->id();
            $table->string("uni_key");
            $table->string("name");
            $table->string("address");
            $table->timestamps();

            $table->index('uni_key');
        });

        Schema::create('measuring_points', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("factory_id");
            $table->string("name");
            $table->integer("index")->nullable();

            $table->index('factory_id');
        });

        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("factory_id");
            $table->unsignedBigInteger("measuring_point_id");
            $table->string("type");
            $table->string("sensor");
            $table->string("location")->nullable();

            $table->index('factory_id');
            $table->index('measuring_point_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factories');
        Schema::dropIfExists('measuring_points');
        Schema::dropIfExists('sensors');
    }
}
