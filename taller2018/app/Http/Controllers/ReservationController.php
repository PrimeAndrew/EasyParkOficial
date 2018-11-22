<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\View\View;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = DB::table('reservations')->get();
        $cars['data2'] = DB::table('cars')->get();



        return view('reservations.bookings',$data);
    }


$cars =  Car::plate($request->get('plate_number'))
->join('cars_type','cars.id_car_type_fk','=','cars_type.id_car_type')
->join('cars_model','cars.id_car_model_fk','=','cars_model.id_car_model')
->join('users_roles','cars.id_roles_users_fk','=','users_roles.id_roles_users')
    //->whereHas()
    //->join('users','users_roles','users_roles.id_users_fk','=','users.id_users')
->orderBy('id_car','ASC')
->paginate(10);
    // dd($cars);
return view('cars.index',compact('cars'));


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //$zones = Zone::all();
        //$zoness =[ 'hola','hola2','hola3',];
        //$price_lists = Price_list::all();
        //return view('id.edit',compact('id','zones','price_lists'));
        $reserva = Reservation::find($id);

        //return View::make('reserva.edit')
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function getData(){
        //$data['data'] = DB::table('reservations')->get();
        //return view('/bookings');
        //dd($data);

        //if(count($data) > 0){
        //    return view('/bookings',$data);
        //}else{
        //    return view('/bookings');
        //}
    }
}
