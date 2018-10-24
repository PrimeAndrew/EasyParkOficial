<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCarsModelToCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedInteger('id_car_model_fk')->after('id_car_type_fk');
            $table->foreign('id_car_model_fk')->references('id_car_model')->on('cars_model');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['id_car_model_fk']);
            $table->dropColumn(['id_car_model_fk']);
        });
    }
}
