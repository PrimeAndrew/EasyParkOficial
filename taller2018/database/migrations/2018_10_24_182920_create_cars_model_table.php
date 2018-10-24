<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars_model', function (Blueprint $table) {
            $table->increments('id_car_model');
            $table->string('model',50);
            $table->year('year',50);
            $table->timestamps();
            //$table->foreign('id_area')->references('id_area')->on('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars_model');
    }
}
