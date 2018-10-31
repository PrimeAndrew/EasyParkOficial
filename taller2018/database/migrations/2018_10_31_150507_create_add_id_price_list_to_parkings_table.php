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
            $table->unsignedInteger('id_parkings_fk')->after('id_parkings');
            $table->foreign('id_parkings_fk')->references('id_parkings')->on('parkings');
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
            $table->dropForeign(['id_parkings_fk']);
            $table->dropColumn(['id_parkings_fk']);
        });
    }
}
