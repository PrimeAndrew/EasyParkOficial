<?php
/**
 * Created by PhpStorm.
 * UserSeeder: josecordova
 * Date: 23-10-18
 * Time: 09:18 PM
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdServiceToTempclosedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temporal_closeds', function (Blueprint $table) {
            $table->unsignedInteger('id_services_fk')->after('id_tempcloseds');
            $table->foreign('id_services_fk')->references('id_services')->on('services');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temporal_closeds', function (Blueprint $table) {
            $table->dropForeign(['id_services_fk']);
            $table->dropColumn(['id_services_fk']);
        });
    }
}
