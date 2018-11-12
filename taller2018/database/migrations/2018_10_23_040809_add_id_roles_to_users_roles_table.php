<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdRolesToUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_roles', function (Blueprint $table) {
            $table->unsignedInteger('id_users_fk');
            $table->foreign('id_users_fk')->references('id_users')->on('users')->after('id_roles_users');
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
            $table->dropForeign(['id_users_fk']);
            $table->dropColumn(['id_users_fk']);
        });
    }
}
