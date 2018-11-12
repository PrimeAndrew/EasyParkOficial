<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->increments('id_parkings');
            //$table->unsignedInteger('id_zone_fk');
            //$table->unsignedInteger('id_price_list_fk');
            $table->string('parking_name',45);
            $table->string('parking_address',1500);
            $table->unsignedInteger('total_spaces');
            $table->time('open_hour');
            $table->time('close_hour');
            $table->decimal('latitude',10,7 ) ->nullable() ;
            $table->decimal('longitud',10,7) ->nullable();
            //$table->timestamp('registry_date');
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
        Schema::dropIfExists('parkings');
    }
}
