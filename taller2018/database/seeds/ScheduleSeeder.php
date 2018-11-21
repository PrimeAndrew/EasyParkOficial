<?php

use Illuminate\Database\Seeder;
use App\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $loc = new Schedule();
        $loc->open_time = '8:00';
        $loc->close_time= '22:00';
        $loc->day='Lunes';
        $loc->save();

        $loc = new Schedule();
        $loc->open_time = '8:00';
        $loc->close_time= '22:00';
        $loc->day='Martes';
        $loc->save();

        $loc = new Schedule();
        $loc->open_time = '8:00';
        $loc->close_time= '22:00';
        $loc->day='Miercoles';
        $loc->save();

        $loc = new Schedule();
        $loc->open_time = '8:00';
        $loc->close_time= '22:00';
        $loc->day='Jueves';
        $loc->save();

        $loc = new Schedule();
        $loc->open_time = '8:00';
        $loc->close_time= '22:00';
        $loc->day='Viernes';
        $loc->save();
    }
}
