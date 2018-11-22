<?php

namespace App\Http\Controllers;

use App\Reservation_client;
use Illuminate\Http\Request;

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
        return view('reservationClients.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);
        Car::create($request->all());
        Session::flash('message','Creado');
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation_client  $reservation_client
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation_client $reservation_client)
    {
        //
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
