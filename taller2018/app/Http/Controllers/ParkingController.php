<?php

namespace App\Http\Controllers;

use App\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class ParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return  view('parkings.index');
        //$parkings =  Parking::orderBy('id','ASC')->paginate(2);
       // $parkings = Parking::all();
        $parkings = Parking::orderBy('id_parkings','ASC')->paginate(4);
        return view('parkings.index',compact('parkings'));
       // return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$zoness = Zone::all();
        $zoness =[ 'hola','hola2','hola3',];
        //return view('parkings.create',compact('zoness'));
        return view('parkings.create', ['zoness'=>$zoness]);


       // $cars_types = Cars_type::all();
        //$cars_types = Cars_type::all();
        //return view('cars.create',compact('cars_types'));
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
        $request->validate([
            'parking_name'=> 'required',
            'parking_address' => 'required',
            'total_spaces' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'latitude' => 'required',
            'longitud' => 'required',
            'id_zone_fk' => 'required',
            'id_price_list_fk' => 'required',
        ]);
        Parking::create($request->all());
        Session::flash('message','Parqueo registrado');
        return redirect()->route('parkings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function show(Parking $parking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking $parking)
    {
        //
        return view('parkings.edit',compact('parking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parking $parking)
    {
        //
        $request->validate([
            'parking_name'=> 'required',
            'parking_address' => 'required',
            'total_spaces' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'latitude' => 'required',
            'longitud' => 'required',
        ]);
        $parking->update($request->all());
        Session::flash('message','Parqueo actualizado correctamente');
        return redirect()->route('parkings.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parking  $parking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parking $parking)
    {
        //
        $parking->delete();
        Session::flash('message','Parqueo borrado correctamente');
        return redirect()->route('parkings.index');
    }
}
