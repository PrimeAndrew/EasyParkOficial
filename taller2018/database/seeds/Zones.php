<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Zones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('zones')->insert([
                'zone' => str_random(5),
                'city' => str_random(5)
            ]);

        }
    }
}
