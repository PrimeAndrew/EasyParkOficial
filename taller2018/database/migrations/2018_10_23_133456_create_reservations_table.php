<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id_reservations');
            //$table->unsignedInteger('id_parking_space_fk');
            //$table->unsignedInteger('id_users_roles_fk');
            //$table->unsignedInteger('id_schedule_fk');
            $table->date('entry_date');
            $table->time('entry_hour');
            $table->date('departure_date');
            $table->time('departure_hour');
            $table->decimal('amount',10,7)->nullable();
            $table->string('confirmation_code',45)->nullable();
            $table->string('reservation_state',45)->nullable();
            $table->date('real_entry_date')->nullable();
            $table->time('real_entry_hour')->nullable();
            $table->date('real_departure_date')->nullable();
            $table->time('real_departure_hour')->nullable();
            $table->string('reservation_type',45)->nullable();
            $table->unsignedInteger('client_score')->nullable();
            $table->unsignedInteger('parking_score')->nullable();
            $table->timestamps();
            $table->unsignedInteger('id_car_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
