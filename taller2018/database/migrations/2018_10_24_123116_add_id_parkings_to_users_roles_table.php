<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdParkingsToUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_roles', function (Blueprint $table) {
            $table->unsignedInteger('id_parkings_fk');
            $table->foreign('id_parkings_fk')->references('id_parkings')->on('parkings')->after('id_roles_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_roles',function (Blueprint $table){
            $table->dropForeign(['id_parkings_fk']);
            $table->dropColumn(['id_parkings_fk']);
        });
    }
}
