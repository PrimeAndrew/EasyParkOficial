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
        //$role_user = Role::where('roles_description', 'prop')->first();
        //$role_admin = Role::where('roles_description', 'admin')->first();

        //$user = new User();
        //$user->name = 'Propietario 1';
        //$user->email = 'propietario1@gmail.com';
        //$user->password = bcrypt('propietario1');
        //$user->save();
        //$user->roles()->attach($role_user);

        //$user = new User();
        //$user->name = 'admin';
        //$user->email = 'admin@gmail.com';
        //$user->password = bcrypt('admin');
        //$user->save();
        //$user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('666666');
        $user->save();
    }
}
