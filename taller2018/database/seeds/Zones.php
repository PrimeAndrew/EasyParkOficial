<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Zone;

class Zones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  for ($i = 0; $i < 5; $i++) {
            DB::table('zones')->insert([
                'zone' => str_random(5),
                'city' => str_random(5)
            ]);

        }*/

        $loc = new Zone();
        $loc->zone = 'Centro';
        $loc->city = 'La Paz';
        $loc->save();

        $loc = new Zone();
        $loc->zone = 'San Pedro';
        $loc->city = 'La Paz';
        $loc->save();

        $loc = new Zone();
        $loc->zone = 'Zona Sur';
        $loc->city = 'La Paz';
        $loc->save();

        $loc = new Zone();
        $loc->zone = 'Sopocachi';
        $loc->city = 'La Paz';
        $loc->save();

        $loc = new Zone();
        $loc->zone = 'Miraflores';
        $loc->city = 'La Paz';
        $loc->save();
    }
}
