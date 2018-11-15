<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users2', function (Blueprint $table) {
            $table->increments('id_users2');
            $table->string('users_name',45);
            $table->string('users_lastname',45);
            $table->string('users_phone',10);
            $table->string('users_email',45);
            $table->string('users_type_doc',10);
            $table->string('users_doc_number',10)->nullable();
            $table->string('users_password',45);
            $table->string('users_status',10)->nullable();
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
        Schema::dropIfExists('users2');
    }
}
