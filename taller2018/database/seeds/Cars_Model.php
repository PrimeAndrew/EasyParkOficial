<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cars_Model extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('cars_model')->insert([
                'model' => str_random(5),
                'year' => '2018',
                'id_brand_fk' => ($i+1)
            ]);

        }

    }
}
