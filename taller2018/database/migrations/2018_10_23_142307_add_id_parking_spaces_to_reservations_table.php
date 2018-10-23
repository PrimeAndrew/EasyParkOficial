<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdParkingSpacesToReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->unsignedInteger('id_parking_spaces_fk')->after('id_reservations');
            $table->foreign('id_parking_spaces_fk')->references('id_parking_spaces')->on('parking_spaces');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign(['id_parking_spaces_fk']);
            $table->dropColumn(['id_parking_spaces_fk']);
        });
    }
}
