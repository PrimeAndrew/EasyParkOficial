<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;
class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->roles_description = 'Administrador';
        $role->save();

        $role = new Role();
        $role->roles_description  = 'Propietario';
        $role->save();

        $role = new Role();
        $role->roles_description  = 'Cliente';
        $role->save();
    }
}
