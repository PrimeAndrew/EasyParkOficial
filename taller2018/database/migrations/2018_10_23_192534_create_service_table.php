<?php
/**
 * Created by PhpStorm.
 * UserSeeder: josecordova
 * Date: 23-10-18
 * Time: 09:06 PM
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id_services');
            //$table->unsignedInteger('id_schedules_fk');
            //$table->unsignedInteger('id_parkings_fk');
            $table->boolean('open');
            $table->decimal('rate_per_hour',10,7);
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
        Schema::dropIfExists('services');
    }
}
