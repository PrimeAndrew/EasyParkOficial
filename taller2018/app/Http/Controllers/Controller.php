<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ClienteRequest;
use Carbon\Carbon;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //use SoftDeletes;

    protected $dates = ['deleted_at'];

    function insert(Request $req){



        $users_name = $req->input('users_name');
        $users_lastname = $req->input('users_lastname');
        $users_phone = $req->input('users_phone');
        $users_email = $req->input('users_email');
        $users_type_doc = $req->input('users_type_doc');
        $users_doc_number = $req->input('users_doc_number');
        $users_password = $req->input('users_password');
        $users_status = $req->input('users_status');


        /*$data = array('users_name'=>$users_name,'users_lastname'=>$users_lastname,'users_phone'=>$users_phone,
            'users_email'=>$users_email,'users_type_doc'=>$users_type_doc,'users_doc_number'=>$users_doc_number,
            'users_password'=>$users_password,'users_status'=>$users_status);*/

        $data = array('name'=>$users_name,'email'=>$users_email,'password'=>$users_password);




        DB::table('users')->insert($data);
        $id = DB::getPdo()->lastInsertId();

        $data2 = array('id_users_fk'=>$id,'id_roles_fk'=>1,'id_parkings_fk'=>1);

        DB::table('users_roles')->insert($data2);

        //return redirect('/home');
        return redirect('cars/create');
    }

    function getData(){
        $data['data'] = DB::table('reservations')
            ->whereNull('deleted_at')
            ->get();

        //dd($data);

        if(count($data) > 0){
            return view('deleteReservation',$data);
        }else{
            return view('deleteReservation  ');
        }
    }

    function delete($id_reservations){
        DB::table('reservations')
            ->where('id_reservations',$id_reservations)
            ->whereNull('deleted_at')
            ->update(['deleted_at' => \Carbon::now()]);
        return redirect('/deleterev');
    }
}
