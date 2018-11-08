<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Price_List extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('price_list')->insert([
                'lower_range' => ($i*2),
                'top_range' => ($i*3),
                'price' => ($i*4),
                'date_registry' =>'2010-10-10',
                'user_id'=> $i,
                'host_id'=> $i,
                'state'=> str_random(5),

            ]);

        }
    }
}
