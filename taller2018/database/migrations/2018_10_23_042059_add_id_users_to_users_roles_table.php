<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUsersToUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_roles', function (Blueprint $table) {
            $table->unsignedInteger('id_roles_fk');
            $table->foreign('id_roles_fk')->references('id_roles')->on('roles')->after('id_users_fk');
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
            $table->dropForeign(['id_roles_fk']);
            $table->dropColumn(['id_roles_fk']);
        });
    }
}
