<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdZonesToParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parkings', function (Blueprint $table) {
            $table->unsignedInteger('id_zones_fk');
            $table->foreign('id_zones_fk')->references('id_zones')->on('zones')->after('id_parkings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parkings', function (Blueprint $table){
            $table->dropForeign(['id_zones_fk']);
            $table->dropColumn(['id_zones_fk']);
        });
    }
}
