<?php

namespace App\Http\Controllers;

use App\Car;
use App\Parking;
use App\User;
use App\Reservation_client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function store(Request $request)
    {
        $request->validate([
            'entry_date' => 'required',
            'entry_hour' => 'required',
            'departure_date' => 'required',
            'departure_hour' => 'required',
            //'amount',
            //'confirmation_code',
            'id_car_fk',
            'id_parking_spaces_fk'

        ]);
        //Reservation_client::create($request->all());
        $res = new Reservation_client();
        $res->entry_date = $request->input('entry_date');
        $res->entry_hour = $request->input('entry_hour');
        $res->departure_date = $request->input('departure_date');
        $res->departure_hour = $request->input('departure_hour');
        $res->id_car_fk = $request->input('id_car_fk');
        $res->id_parking_spaces_fk = $request->input('id_parking_spaces_fk');
        $res->reservation_state = 'Reservado';
        $res->save();

        //Session::flash('message','Creado');
        return redirect()->route('bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation_client  $reservation_client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_auth = Auth::id();
        $park=DB::table('parkings')->where('id_parkings','=',$id)->first();
        $space=DB::table('parking_spaces')->where('id_parkings_fk','=',$id)->first();
        $cars = Car::all()->where ('id_roles_users_fk','=',$id_auth);

        $usersP=DB::table('users')
            ->join('users_roles','users.id_users','=','users_roles.id_users_fk')
            ->select('id_roles_users','id_users_fk','name','email')
            ->where('id_users','=',$id_auth)
            ->first();
        $carsP=DB::table('cars')
            ->join('users_roles','users_roles.id_roles_users','=','cars.id_roles_users_fk')
            ->select('plate_number','id_car')
            ->where('users_roles.id_users_fk','=',$id_auth)
            ->get();

//        dd($cars);
        return view('reservationClients.create',compact('park','space','cars','usersP','carsP'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation_client  $reservation_client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id_auth = Auth::id();
        $park=DB::table('parkings')->where('id_parkings','=',$id)->first();
        $space=DB::table('parking_spaces')->where('id_parkings_fk','=',$id)->first();
        $cars = Car::all()->where ('id_roles_users_fk','=',$id_auth);

        $usersP=DB::table('users')
            ->join('users_roles','users.id_users','=','users_roles.id_users_fk')
            ->select('id_roles_users','id_users_fk','name','email')
            ->where('id_users','=',$id_auth)
            ->first();
        $carsP=DB::table('cars')
            ->join('users_roles','users_roles.id_roles_users','=','cars.id_roles_users_fk')
            ->select('plate_number','id_car')
            ->where('users_roles.id_users_fk','=',$id_auth)
            ->get();

        $resClient=Reservation_client::where('id_reservations','=',$id)


            ->first();
//        dd($usersP);
        return view('reservationClients.recibo',compact('resClient','park','space','cars','usersP','carsP'));
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
