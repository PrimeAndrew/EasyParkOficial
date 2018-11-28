<?php

namespace App\Http\Controllers;

use App\Car;
use App\Cars_type;
use App\Cars_model;
use App\User;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id_auth = Auth::id();
        $cars =  Car::plate($request->get('plate_number'))
            ->join('cars_type','cars.id_car_type_fk','=','cars_type.id_car_type')
            ->join('cars_model','cars.id_car_model_fk','=','cars_model.id_car_model')
            ->join('users_roles','cars.id_roles_users_fk','=','users_roles.id_roles_users')
            ->where ('users_roles.id_users_fk','=',$id_auth)

            //->whereHas()
            //->join('users','users_roles','users_roles.id_users_fk','=','users.id_users')
            ->orderBy('id_car','ASC')
            ->paginate(10);
       // dd($cars);
        return view('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars_types = Cars_type::all();
        $cars_models = Cars_model::all();
       // $user_roles = UserRole::all();
        $user_roles = User::all();
        $id_auth = Auth::id();
        $name_auth = Auth::user();

       // return view('cars.create',compact('cars_types','cars_models','user_roles'));
        //$usersP = DB::table('users')->select('id_users','name','email')->orderby('id_users','DESC')->first();
         return view('cars.create',compact('cars_types','cars_models','user_roles','id_auth','name_auth'));

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
            'plate_number'=> 'max:7|min:6|required|unique:cars',
            'color' => 'required',
            'id_car_type_fk' => 'required',
            'id_car_model_fk' => 'required',
            'id_roles_users_fk' => 'required',
        ]);
        Car::create($request->all());
        Session::flash('message','Creado');
        return redirect()->route('cars.index');
        //return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $cars_types = Cars_type::all();
        $cars_models = Cars_model::all();
//        $user_roles = UserRole::all();
        $user_roles = User::all();

        return view('cars.edit',compact('car','cars_types','cars_models','user_roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'plate_number'=> 'required',
            'color' => 'required',
            'id_car_type_fk' => 'required',
            'id_car_model_fk' => 'required',
            'id_roles_users_fk' => 'required',
        ]);
        $car->update($request->all());
        Session::flash('message','Vehiculo actualizado correctamente');
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        Session::flash('message','Vehiculo borrado correctamente');
        return redirect()->route('cars.index');
    }
}
