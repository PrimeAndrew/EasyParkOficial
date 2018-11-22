<?php

namespace App\Http\Controllers;

use App\Car;
use App\Parking;
use App\User;
use App\Reservation_client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Parking $parking)
    {
        $request->validate([
            'parking_name' => 'required',
            'parking_address' => 'required',
            'total_spaces'=> 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'latitude' => 'required',
            'longitud' => 'required',
            'id_zones_fk' => 'required',
            'id_price_list_fk' => 'required'
        ]);
        $parking::create($request->all());
        //Session::flash('message','Creado');
        return redirect()->route('reservationClients.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation_client  $reservation_client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$parkings = Parking::all();
        //dd($parking->parking_name);

        //$park=Parking::find($id)->id_parkings;


        $park=DB::table('parkings')->where('id_parkings','=',$id)->first();
        $space=DB::table('parking_spaces')->where('id_parkings_fk','=',$id)->first();

        $cars = Car::all();

        //dd($park->parking_name);
        return view('reservationClients.create',compact('park','space','cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation_client  $reservation_client
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation_client $reservation_client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation_client  $reservation_client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation_client $reservation_client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation_client  $reservation_client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation_client $reservation_client)
    {
        //
    }
}
