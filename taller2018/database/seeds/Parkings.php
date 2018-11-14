<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Parking;

class Parkings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*for ($i = 0; $i < 5; $i++) {
            DB::table('parkings')->insert([
                'parking_name' => str_random(5),
                'parking_address' => str_random(5),
                'total_spaces' => ($i*5),
                'open_hour' => '10:00',
                'close_hour'=> '11:00',
                'latitude'=> $i/6,
                'longitud'=> $i/7,
                'id_zones_fk' => $i+1,
                'id_price_list_fk' =>  $i+1
            ]);

        }
        */


        $loc = new Parking();
        $loc->parking_name = 'Camacho';
        $loc->parking_address = 'Av. Camacho';
        $loc->total_spaces= '20';
        $loc->open_hour= '10:00';
        $loc->close_hour= '22:00';
        $loc->latitude  = '-16.499639';
        $loc->longitud= '-68.132441';
        $loc->id_zones_fk='1';
        $loc->id_price_list_fk='1';
        $loc->save();


        $loc = new Parking();
        $loc->parking_name = 'Parqueo ecuador ';
        $loc->parking_address = 'Pasaje Waldo Ballivian';
        $loc->total_spaces= '20';
        $loc->open_hour= '10:00';
        $loc->close_hour= '22:00';
        $loc->latitude  = '-16.511316';
        $loc->longitud= '-68.129050';
        $loc->id_zones_fk='2';
        $loc->id_price_list_fk='1';
        $loc->save();


        $loc = new Parking();
        $loc->parking_name = 'Parqueo 2';
        $loc->parking_address = 'Av. 20 de octubre 2149';
        $loc->total_spaces= '20';
        $loc->open_hour= '10:00';
        $loc->close_hour= '22:00';
        $loc->latitude = '-16.507613';
        $loc->longitud= '-68.128835';
        $loc->id_zones_fk='2';
        $loc->id_price_list_fk='1';
        $loc->save();


        $loc = new Parking();
        $loc->parking_name = 'Parqueo 3';
        $loc->parking_address = 'Av. 6 de agosto';
        $loc->total_spaces= '15';
        $loc->open_hour= '10:00';
        $loc->close_hour= '22:00';
        $loc->latitude = '-16.5112527';
        $loc->longitud= '-68.12922516';
        $loc->id_zones_fk='2';
        $loc->id_price_list_fk='2';
        $loc->save();

        $loc = new Parking();
        $loc->parking_name = 'Estacionamiento Bueno';
        $loc->parking_address = 'Casco Urbano central';
        $loc->total_spaces= '30';
        $loc->open_hour= '10:00';
        $loc->close_hour= '22:00';
        $loc->latitude = '-16.500750';
        $loc->longitud = '-68.132591';
        $loc->id_zones_fk='3';
        $loc->id_price_list_fk='3';
        $loc->save();

        $loc = new Parking();
        $loc->parking_name = 'Parqueo Gamlp';
        $loc->parking_address = 'Ex -Banco del Estado';
        $loc->total_spaces= '40';
        $loc->open_hour= '10:00';
        $loc->close_hour= '22:00';
        $loc->latitude = '-16.497911';
        $loc->longitud = '-68.133578';
        $loc->id_zones_fk='1';
        $loc->id_price_list_fk='4';
        $loc->save();
    }
}
