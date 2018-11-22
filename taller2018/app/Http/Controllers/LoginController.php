<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request){
        //dd($request->all());

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){


            $query2 = DB::table('roles')
                ->join ('users_roles', 'users_roles.id_roles_fk', '=', 'roles.id_roles')
                ->join ('users', 'users.id_users', '=', 'users_roles.id_users_fk')
                ->select('roles.roles_description')
                ->where ('users.email', '=', $request->email)->first();

            //dd($query2);

            if($query2->roles_description == 'Administrador'){
                //return redirect()->route('administradorhome');
                return redirect('/administradorhome');
            }elseif ($query2->roles_description == 'Cliente'){
                //return redirect()->route('clientehome');
                return redirect('/clientehome');
            }else{
                return redirect()->route('home');

            }

        }else{
            $query2 = DB::table('roles')
                ->join ('users_roles', 'users_roles.id_roles_fk', '=', 'roles.id_roles')
                ->join ('users', 'users.id_users', '=', 'users_roles.id_users_fk')
                ->select('roles.roles_description')
                ->where ('users.email', '=', $request->email)->first();

            //dd($query2);

            if($query2->roles_description == 'Administrador'){
                return redirect()->route('administradorhome');
            }elseif ($query2->roles_description == 'Cliente'){
                return redirect()->route('clientehome');
            }else{
                return redirect()->route('home');
            }

            //return redirect()->back();
        }


    }

}
