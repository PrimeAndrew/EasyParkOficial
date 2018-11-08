<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Cars_Type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('cars_type')->insert([
                'car_type' => str_random(5)
            ]);

        }
    }
}
