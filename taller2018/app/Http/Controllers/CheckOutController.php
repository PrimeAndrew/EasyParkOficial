<?php

namespace App\Http\Controllers;

use App\Checkout;
use App\reservation;
use Illuminate\Http\Request;
use App\ParkingSpace;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserva['reserva'] = DB::table('reservations')->get();
        return view('reservations.checkOut',$reserva);
    }

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
     * @param  \App\TemporalClosed  $temporalClosed
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $reserva = reservation::where('id_reservations',$id)->first();
*/
        $reserva = Reservation::where('id_reservations','=',$id)
            ->first();
        $car=DB::table('cars')->where('id_car','=',$reserva->id_car_fk)->first();
        $space=DB::table('parking_spaces')->where('id_parking_spaces','=',$reserva->id_parking_spaces_fk)->first();


        $tarea =Reservation::find($id);
        $tarea->reservation_state = 'Finalizado';
        $tarea->update();

        $spaces=ParkingSpace::find($space->id_parking_spaces);
        $spaces->space_status= 'Libre';
        $spaces->update();
        return View('reservations.checkOut', compact('reserva','car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TemporalClosed  $temporalClosed
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TemporalClosed  $temporalClosed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TemporalClosed  $temporalClosed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
