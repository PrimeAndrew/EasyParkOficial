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
        $reserva = reservation::where('id_reservations',$id)
            ->first();
        $space=DB::table('parking_spaces')->where('id_parking_spaces','=',$reserva->id_parking_spaces_fk)->first();
        $park=DB::table('parkings')->where('id_parkings','=',$space->id_parkings_fk)->first();
        $serv=DB::table('services')->where('id_services','=',$park->id_parkings)->first();
////para mostrar la cantidad de horas que se quedara la persona con formato H:min:seg
        $salida = new \DateTime($reserva->departure_hour);
        $entrada = new \DateTime($reserva->entry_hour);
        $tiempo = $salida->diff($entrada);
        $tiempot=$tiempo->format("%H:%I:%S");
////para calcular el monto a pagar
         $c_salida=strtotime($reserva->departure_hour);
         $c_entrada=strtotime($reserva->entry_hour);
        $tiempores=($c_salida-$c_entrada)/60/60;
        $precio=$serv->rate_per_hour*$tiempores;

        return View('reservations.checkIn', compact('reserva','serv','tiempot','precio'));
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
