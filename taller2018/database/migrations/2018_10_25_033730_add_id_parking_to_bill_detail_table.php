<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdParkingToBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bill_detail', function (Blueprint $table) {
            $table->unsignedInteger('id_parkings');
            $table->foreign('id_parkings')->references('id_parkings')->on('parkings');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bill_detail', function (Blueprint $table) {
            $table->dropForeign(['id_parkings']);
            $table->dropColumn(['id_parkings']);

        });
    }
}
