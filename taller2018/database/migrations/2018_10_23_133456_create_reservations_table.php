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
            //$table->unsignedInteger('id_car_fk');
            //$table->unsignedInteger('id_schedule_fk');
            $table->timestamp('entry_date');
            $table->time('entry_hour');
            $table->timestamp('departure_date');
            $table->time('departure_hour');
            $table->decimal('amount',10,7);
            $table->string('confirmation_code',45);
            $table->string('reservation_state',45);
            $table->timestamp('real_entry_date')-> nullable();
            $table->timestamp('real_departure_date');
            $table->string('reservation_type',45)->nullable();
            $table->unsignedInteger('client_score');
            $table->unsignedInteger('parking_score');
            $table->timestamp('date_mode_state');
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
        Schema::dropIfExists('reservations');
    }
}
