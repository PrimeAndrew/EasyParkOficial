<?php

namespace App\Http\Controllers;

use App\Gmaps;
use App\Parking;
use Illuminate\Http\Request;

class GmapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //configuaración
        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 500;
        $config['map_height'] = 500;
        $config['zoom'] = 15;
       /* $config['places']=TRUE;
        $config['placesLocation']='-16.5078,-68.1460';
        $config['placesRadius']=200;*/
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
        $marker['infowindow_content']='Ubicasion Actual';
        $marker['icon']='http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        \Gmaps::add_marker($marker);

//        $marker = array();
//        $marker['position']='-16.5080500,-68.1450780';
//        $marker['onClick']='alert("Posicion actal")';
//        \Gmaps::add_marker($marker);
//        $marker = array();
//        $marker['position']='-16.5074250,-68.1461940';
//        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();
        //$ubicasion=DB::table('parkings')->select('latitude','longitud')->get();
        $parkings = Parking::orderBy('id_parkings','ASC')->paginate(2);
        //Devolver vista con datos del mapa
        return view('reservations.searchParking', compact('map','parkings'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gmaps  $gmaps
     * @return \Illuminate\Http\Response
     */
    public function show(Gmaps $gmaps)
    {
        /*$zones = Zone::all();
        $direcciones=Parking::all();
        return view('reservations.searchParking',compact('zones','direcciones'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gmaps  $gmaps
     * @return \Illuminate\Http\Response
     */
    public function edit(Gmaps $gmaps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gmaps  $gmaps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gmaps $gmaps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gmaps  $gmaps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gmaps $gmaps)
    {
        //
    }
}
