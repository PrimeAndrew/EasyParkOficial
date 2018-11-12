<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_users');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            /*$table->increments('id_users');
            $table->string('users_name')->nullable();
            $table->string('users_lastname',45)->nullable();
            $table->string('users_phone',10)->nullable();
            $table->string('users_email')->nullable();
            $table->string('users_type_doc');
            $table->string('users_doc_number',10)->unique();
            $table->string('users_password');
            $table->string('users_status',45)->default('Activo');
            $table->timestamps();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
