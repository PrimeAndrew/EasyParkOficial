<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            DB::table('brands')->insert([
                'brand' => str_random(5)
            ]);
        }
//        Brands::create(array('brand'=>'marca1'));
    }
}
