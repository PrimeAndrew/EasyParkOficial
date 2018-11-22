<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_propietario = Role::where('roles_description', 'Propietario')->first();
        $role_administrador = Role::where('roles_description', 'Administrador')->first();
        $role_cliente = Role::where('roles_description', 'Cliente')->first();

        $user = new User();
        $user->name = 'Juan';
        $user->email = 'juan@gmail.com';
        $user->password = bcrypt('123');
        $user->save();
        //$user->roles()->attach($role_propietario);

        $user = new User();
        $user->name = 'Administrador 1';
        $user->email = 'administrador1@gmail.com';
        $user->password = bcrypt('administrador1');
        $user->save();
        //$user->roles()->attach($role_administrador);

        $user = new User();
        $user->name = 'Cliente 1';
        $user->email = 'cliente1@gmail.com';
        $user->password = bcrypt('cliente1');
        $user->save();
        //$user->roles()->attach($role_cliente);

    }
}
