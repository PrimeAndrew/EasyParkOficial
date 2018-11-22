<?php

namespace App\Http\Controllers;

use App\Checkin;
use App\reservation;
use Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CheckInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserva['reserva'] = DB::table('reservations')->get();
        return view('reservations.checkIn',$reserva);
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
        //
        $reserva = reservation::where('id_reservations',$id)->first();

        return View('reservations.checkIn', compact('reserva'));
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
    public static function update(Request $request, $id)
    {
        //
        $request->validate([
            'reservation_state'=> 'required',
        ]);
        $id->update($request->all());
        //$reservation = array(
        //    'reservation_state'=> 'required',
        //);
        //$validator = Validator::make(Input::all(), $reservation);

        //$reservation = CheckInController::show($id);
        //$reservation->reservation_state = "Ocupado";
        //$reservation->save();

        Session::flash('message','Reserva actualizada correctamente');
        return redirect()->route('reservations.bookings');
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
