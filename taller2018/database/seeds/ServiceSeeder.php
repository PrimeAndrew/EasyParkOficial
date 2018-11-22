<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<5;$i++){
            $loc = new Service();
            $loc->open = '1';
            $loc->rate_per_hour = '5';
            $loc->id_schedules_fk= $i+1;
            $loc->id_parkings_fk= '1';
            $loc->save();
        }
        for ($i=0;$i<5;$i++){
            $loc = new Service();
            $loc->open = '1';
            $loc->rate_per_hour = '3';
            $loc->id_schedules_fk= $i+1;
            $loc->id_parkings_fk= '2';
            $loc->save();
        }
        for ($i=0;$i<5;$i++){
            $loc = new Service();
            $loc->open = '1';
            $loc->rate_per_hour = '5';
            $loc->id_schedules_fk= $i+1;
            $loc->id_parkings_fk= '3';
            $loc->save();
        }
        for ($i=0;$i<5;$i++){
            $loc = new Service();
            $loc->open = '1';
            $loc->rate_per_hour = '3';
            $loc->id_schedules_fk= $i+1;
            $loc->id_parkings_fk= '4';
            $loc->save();
        }
        for ($i=0;$i<5;$i+=3){
            $loc = new Service();
            $loc->open = '0';
            $loc->rate_per_hour = '5';
            $loc->id_schedules_fk= $i+1;
            $loc->id_parkings_fk= '5';
            $loc->save();
        }
        for ($i=0;$i<5;$i+=2){
            $loc = new Service();
            $loc->open = '1';
            $loc->rate_per_hour = '3';
            $loc->id_schedules_fk= $i+1;
            $loc->id_parkings_fk= '5';
            $loc->save();
        }
        for ($i=0;$i<5;$i++){
            $loc = new Service();
            $loc->open = '1';
            $loc->rate_per_hour = '5';
            $loc->id_schedules_fk= $i+1;
            $loc->id_parkings_fk= '6';
            $loc->save();
        }


    }
}
