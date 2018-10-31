<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddIdPriceListToParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parkings', function (Blueprint $table) {
            $table->unsignedInteger('id_price_list_fk')->after('id_parkings');
            $table->foreign('id_price_list_fk')->references('id_price_list')->on('price_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('id_price_list_to_parkings');
        Schema::table('parkings', function (Blueprint $table) {
            $table->dropForeign(['id_price_list_fk']);
            $table->dropColumn(['id_price_list_fk']);
        });
    }
}
