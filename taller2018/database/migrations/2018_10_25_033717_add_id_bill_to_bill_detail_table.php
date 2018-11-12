<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdBillToBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bill_detail', function (Blueprint $table) {
            $table->unsignedInteger('id_bill');
            $table->foreign('id_bill')->references('id_bill')->on('bill');
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
            $table->dropForeign(['id_bill']);
            $table->dropColumn(['id_bill']);

        });
    }
}
