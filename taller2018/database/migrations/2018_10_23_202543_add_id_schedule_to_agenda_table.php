<?php
/**
 * Created by PhpStorm.
 * UserSeeder: josecordova
 * Date: 23-10-18
 * Time: 09:25 PM
 */


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdScheduleToAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agendas', function (Blueprint $table) {
            $table->unsignedInteger('id_schedules_fk')->after('id_agendas');
            $table->foreign('id_schedules_fk')->references('id_schedules')->on('schedules');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agendas', function (Blueprint $table) {
            $table->dropForeign(['id_schedules_fk']);
            $table->dropColumn(['id_schedules_fk']);
        });
    }
}
