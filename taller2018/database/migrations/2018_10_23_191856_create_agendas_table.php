<?php
/**
 * Created by PhpStorm.
 * UserSeeder: josecordova
 * Date: 23-10-18
 * Time: 08:53 PM
 */



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id_agendas');
            //$table->unsignedInteger('id_schedules_fk');
            $table->string('state_agenda',45);
            $table->time('date_mod_agenda')->nullable();
            $table->timestamps();

            /* $table->unsignedInteger('user_id');
            $table->string('host_mode_id',45);*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
