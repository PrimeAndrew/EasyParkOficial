<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Parkings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
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
    }
}
