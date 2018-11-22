<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(Roles::class);

        // Los usuarios necesitarán los roles previamente generados

        $this->call('Cars_Type');
        $this->call('Cars_Model');
        $this->call('Zones');
        $this->call('Price_List');
        $this->call('Parkings');

        $this->call('Parking_Spaces');
        $this->call('ScheduleSeeder');
        $this->call('ServiceSeeder');
        $this->call('AgendaSeeder');

    }
}
