<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //car 1
        $loc = new Car();
        $loc->plate_number= '4523455';
        $loc->color= 'negro';
        $loc->created_at= '2018-07-15';
        $loc->id_car_type_fk= '1';
        $loc->id_car_model_fk= '1';
        $loc->id_roles_users_fk= '1';
        $loc->save();
          }
}
