<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdBrandsToCarsModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars_model', function (Blueprint $table) {
            $table->unsignedInteger('id_brand_fk')->after('id_car_model');
            $table->foreign('id_brand_fk')->references('id_brand')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars_model', function (Blueprint $table) {
            $table->dropForeign(['id_brand_fk']);
            $table->dropColumn(['id_brand_fk']);
        });
    }
}
