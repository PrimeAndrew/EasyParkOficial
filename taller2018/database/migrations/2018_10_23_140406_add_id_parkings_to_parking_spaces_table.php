<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdParkingsToParkingSpacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parking_spaces', function (Blueprint $table) {
            $table->unsignedInteger('id_parkings_fk');
            $table->foreign('id_parkings_fk')->references('id_parkings')->on('parkings')->after('id_parking_spaces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parking_spaces', function (Blueprint $table){
            $table->dropForeign(['id_parkings_fk']);
            $table->dropColumn(['id_parkings_fk']);
        });
    }
}
