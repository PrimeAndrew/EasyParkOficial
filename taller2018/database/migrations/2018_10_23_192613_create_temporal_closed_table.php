<?php
/**
 * Created by PhpStorm.
 * UserSeeder: josecordova
 * Date: 23-10-18
 * Time: 09:14 PM
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemporalclosedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporal_closeds', function (Blueprint $table) {
            $table->increments('id_tempcloseds');
            //$table->unsignedInteger('id_services_fk');
            $table->time('start_closing');
            $table->time('end_closing');
            $table->string('description',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temporal_closeds');
    }
}
