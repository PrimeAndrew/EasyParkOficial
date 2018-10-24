<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUsersRolesToCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedInteger('id_roles_users_fk');
            $table->foreign('id_roles_users_fk')->references('id_roles_users')->on('users_roles')->after('id_car_model_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table){
            $table->dropForeign(['id_roles_users_fk']);
            $table->dropColumn(['id_roles_users_fk']);
        });
    }
}
