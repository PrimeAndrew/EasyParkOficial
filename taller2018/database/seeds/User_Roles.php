<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\users_roles;
class User_Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1; $i++) {
            DB::table('users_roles')->insert([
                'id_users_fk'=> $i+1,
                'id_roles_fk'=> $i+1,
                'id_parkings_fk' => $i+1
            ]);

        }
    }
}
