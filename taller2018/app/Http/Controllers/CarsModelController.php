<?php

namespace App\Http\Controllers;

use App\Cars_model;
use Illuminate\Http\Request;

class CarsModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'plate_number'=> 'required',
            'color' => 'required',
            'id_car_type_fk' => 'required',
            'id_car_model_fk' => 'required',
            'id_roles_users_fk' => 'required',
        ]);
        Car::create($request->all());
        Session::flash('message','Creado');
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cars_model  $cars_model
     * @return \Illuminate\Http\Response
     */
    public function show(Cars_model $cars_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cars_model  $cars_model
     * @return \Illuminate\Http\Response
     */
    public function edit(Cars_model $cars_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cars_model  $cars_model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars_model $cars_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cars_model  $cars_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cars_model $cars_model)
    {
        //
    }
}
