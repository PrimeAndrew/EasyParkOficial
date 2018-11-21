<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Parking_Spaces extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    ///Datos apara espacios de parqueo
    public function run()
    {
        //espacios libres
        for ($i = 0; $i < 5; $i++) {
            DB::table('parking_spaces')->insert([
                'space_code' => $i+1,
                'space_status' =>'Libre',
                'space_mod_date' =>'2018-10-10',
                'id_parkings_fk' => $i+2
            ]);

        }

        //espacios ocupados
        for ($i = 0,$j=6; $i < 5; $i++,$j++) {
            DB::table('parking_spaces')->insert([
                'space_code' => $j,
                'space_status' => 'Ocupado',
                'space_mod_date' =>'2018-10-10',
                'id_parkings_fk' => $i+2
            ]);
        }

        //espacios reservados
        for ($i = 0,$j=10; $i < 5; $i++,$j++) {
            DB::table('parking_spaces')->insert([
                'space_code' => $j,
                'space_status' => 'Reservado',
                'space_mod_date' =>'2018-10-10',
                'id_parkings_fk' => $i+1
            ]);
        }

        ///espacios cancelados
        for ($i = 0,$j=14; $i < 5; $i++,$j++) {
            DB::table('parking_spaces')->insert([
                'space_code' => $j,
                'space_status' => 'Cancelado',
                'space_mod_date' =>'2018-10-10',
                'id_parkings_fk' => $i+1
            ]);
        }
    }
}
