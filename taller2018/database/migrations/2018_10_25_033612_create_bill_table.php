<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
            $table->increments('id_bill');
            //$table->unsignedInteger('id_company');
            //$table->unsignedInteger('id_cliente');
            $table->timestamp('billing_date');
            $table->timestamp('expiration_date');
            $table->string('authorization_code',45);
            $table->string('control_code',45);
            $table->string('payment_state',45);
            $table->timestamp('registry_date');
            $table->integer('user_id');
            $table->string('host_id',45);
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
        Schema::dropIfExists('bill');
    }
}
