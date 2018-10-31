<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_list', function (Blueprint $table) {
            $table->increments('id_price_list');
            $table->unsignedInteger('lower_range');
            $table->unsignedInteger('top_range');
            $table->decimal('price',10,7);
            $table->timestamp('date_registry');
            $table->unsignedInteger('user_id');
            $table->string('host_id',45);
            $table->string('state',45);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_list');
    }
}
