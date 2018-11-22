<?php

use Illuminate\Database\Seeder;
use App\Reservation;
class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cliente 1
        $loc = new Reservation();
        $loc->entry_date= '2018-07-15';
        $loc->entry_hour= '8:00';
        $loc->departure_date= '2018-07-15';
        $loc->departure_hour= '10:00';
        $loc->amount= '10';
        $loc->confirmation_code ='CD23bgd';
        $loc->reservation_state='Reservado';
        $loc->real_entry_date='2018-07-15';
        $loc->real_entry_hour='8:00';
        $loc->real_departure_date='2018-07-15';
        $loc->real_departure_hour='10:00';
        $loc->reservation_type='Cliente';
        $loc->client_score='5';
        $loc->parking_score='4';
        $loc->id_parking_spaces_fk='11';
        $loc->id_car_fk='1';
        $loc->save();
/*
        ///cliente 2
        $loc = new Reservation();
        $loc->entry_date= '2018-07-15';
        $loc->entry_hour= '11:00';
        $loc->departure_date= '2018-07-15';
        $loc->departure_hour= '12:00';
        $loc->amount= '10';
        $loc->confirmation_code = '12332fred';
        $loc->reservation_state= 'Reservado';
        $loc->real_entry_date='2018-07-15';
        $loc->real_entry_hour='11:00';
        $loc->real_departure_date= '2018-07-15';
        $loc->real_departure_hour='13:00';
        $loc->reservation_type='Cliente';
        $loc->client_score='4';
        $loc->parking_score='3';
        $loc->id_parking_spaces_fk=='12';
        $loc->id_car_fk='1';
        $loc->save();
*/

        ///cliente 4
        $loc = new Reservation();
        $loc->entry_date= '2018-07-15';
        $loc->entry_hour= '20:00';
        $loc->departure_date= '2018-07-15';
        $loc->departure_hour= '21:00';
        $loc->amount= '10';
        $loc->confirmation_code = 'cccc34565';
        $loc->reservation_state= 'Reservado';
        $loc->real_entry_date='2018-07-15';
        $loc->real_entry_hour='19:30';
        $loc->real_departure_date= '2018-07-15';
        $loc->real_departure_hour='21:30';
        $loc->reservation_type='Cliente';
        $loc->client_score='4';
        $loc->parking_score='3';
        $loc->id_parking_spaces_fk='13';
        $loc->id_car_fk='1';
        $loc->save();

        ///cliente 5
        $loc = new Reservation();
        $loc->entry_date= '2018-07-16';
        $loc->entry_hour= '10:00';
        $loc->departure_date= '2018-07-16';
        $loc->departure_hour= '14:30';
        $loc->amount= '10';
        $loc->confirmation_code = 'cccc34565';
        $loc->reservation_state= 'Reservado';
        $loc->real_entry_date='2018-07-16';
        $loc->real_entry_hour='15:00';
        $loc->real_departure_date= '2018-07-16';
        $loc->real_departure_hour='17:00';
        $loc->reservation_type='Empleado';
        $loc->client_score='4';
        $loc->parking_score='3';
        $loc->id_parking_spaces_fk='14';
        $loc->id_car_fk='1';
        $loc->save();

        ///cliente 6
        $loc = new Reservation();
        $loc->entry_date= '2018-03-19';
        $loc->entry_hour= '10:45';
        $loc->departure_date= '2018-05-11';
        $loc->departure_hour= '11:34';
        $loc->amount= '123';
        $loc->confirmation_code = 'dsfds44465';
        $loc->reservation_state= 'Ocupado';
        $loc->real_entry_date='2018-02-5';
        $loc->real_entry_hour='11:11';
        $loc->real_departure_date= '2018-09-16';
        $loc->real_departure_hour='17:59';
        $loc->reservation_type='Empleado';
        $loc->client_score='4';
        $loc->parking_score='3';
        $loc->id_parking_spaces_fk='14';
        $loc->id_car_fk='1';
        $loc->save();

        ///cliente 7
        $loc = new Reservation();
        $loc->entry_date= '2018-04-11';
        $loc->entry_hour= '11:44';
        $loc->departure_date= '2018-05-15';
        $loc->departure_hour= '12:37';
        $loc->amount= '13';
        $loc->confirmation_code = 'rrrrrr34565';
        $loc->reservation_state= 'Ocupado';
        $loc->real_entry_date='2018-07-16';
        $loc->real_entry_hour='15:00';
        $loc->real_departure_date= '2018-07-16';
        $loc->real_departure_hour='17:00';
        $loc->reservation_type='Empleado';
        $loc->client_score='4';
        $loc->parking_score='3';
        $loc->id_parking_spaces_fk='14';
        $loc->id_car_fk='1';
        $loc->save();

    }
}
