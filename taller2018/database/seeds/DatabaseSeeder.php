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
        $this->call('BrandsTableSeeder');
        $this->call('Cars_Type');
        $this->call('Cars_Model');
        $this->call('Zones');
        $this->call('Price_List');
        $this->call('Parkings');
        $this->call('Roles');
        //$this->call('Users');
        //this->call('User_Roles');

    }
}
