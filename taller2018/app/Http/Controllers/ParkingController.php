<?php

namespace App\Http\Controllers;

use App\Parking;
use App\Price_list;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ParkingRequest;

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
        //configuracion del mapa
        $config = array();
        $config['center'] = '-16.507852,-68.146009';
        $config['map_width'] = 500;
        $config['map_height'] = 500;
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
 
            });
        }
        centreGot = true;';


        \Gmaps::initialize($config);

        // Colocar el marcador
        // Una vez se conozca la posición del usuario
        $marker = array();
        $marker['position']='auto';
        $marker['draggable'] = true;
        //La acción de JavaScript a realizar cuando el usuario deja de arrastrar el mapa.
        $marker['ondragend'] = 'alert(\'Ubicacion Actual: \' + event.latLng.lat() + \', \' + event.latLng.lng());';

        $marker['ondragend'] = 'document.getElementById("latitude").value = event.latLng.lat(); document.getElementById("longitud").value = event.latLng.lng();';

        //$lat=event.latLng.lat()+"";
        //$lon=event.latLng.lng()+"";
        //alert('$lat','$lon');

        \Gmaps::add_marker($marker);

        $map = \Gmaps::create_map();


        //Devolver vista con datos del mapa
        //return view('parkings.create', compact('map'));
        //------------------------------------------

        $zones = Zone::all();
       // $zoness =[ 'hola','hola2','hola3',];
        $price_lists = Price_list::all();
        return view('parkings.create',compact('map','zones','price_lists'));
        //return view('parkings.create', ['zoness'=>$zones]);



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
    public function store(ParkingRequest $request)
    {
        //
        $request->validate([
//            'parking_name'=> 'required',
//            'parking_address' => 'required',
            'total_spaces' => 'required',
            'open_hour' => 'required',
            'close_hour' => 'required',
            'latitude' => 'required',
            'longitud' => 'required',
            'id_zones_fk' => 'required',
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

        $zones = Zone::all();
        //$zoness =[ 'hola','hola2','hola3',];
        $price_lists = Price_list::all();
        return view('parkings.edit',compact('parking','zones','price_lists'));



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
    public function pdfexport(Parking $parking)
    {

        //
//        $parking->delete();
//        Session::flash('message','Parqueo borrado correctamente');
//        return redirect()->route('parkings.index');
    }
}
