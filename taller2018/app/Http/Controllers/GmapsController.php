<?php

namespace App\Http\Controllers;

use App\Gmaps;
use App\Parking;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GmapsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parkings=DB::table('parkings')
            ->paginate(3);
        $libre=DB::table('parking_spaces')
            ->count()
            ->where('space_status','=','libre')
            ->get();



        //configuaración
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
        $marker['position']=$parkings->latitude.",".$parkings->longitud;
        $marker['infowindow_content']=$parkings->address;

        $marker['icon']='http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        \Gmaps::add_marker($marker);
        $map = \Gmaps::create_map();



        //$parkings = Parking::orderBy('id_parkings','ASC')->paginate(2);
        //Devolver vista con datos del mapa
        return view('reservations.searchParking', compact('map','parkings'));
    }



    /**
     * Crasion de mapa apra registrar ubicasion.
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
        $marker['ondragend'] = 'alert(\'YUbicasion Actual: \' + event.latLng.lat() + \', \' + event.latLng.lng());';;
        \Gmaps::add_marker($marker);

        $map = \Gmaps::create_map();


        //Devolver vista con datos del mapa
        return view('parkings.create', compact('map'));
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
    public function show($id)
    {

      $gmaps=Parking::find($id);
        /*$gmaps=DB::table('parkings')
            ->join('zones','zones.id_zones','=','parkings.id_zones_fk')
            ->select('parkings.parking_name','parkings.parking_address','parkings.total_spaces','parkings.latitude as latitude','parkings.longitud as longitud', 'zones.zone','zones.city')
            ->where('parkings.id_parkings','=',$id)
            ->get();
*/

        //configuaración
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
        $marker['position']=$gmaps->latitude.",".$gmaps->longitud;
        $marker['infowindow_content']='Parqueo Encontrado';
        \Gmaps::add_marker($marker);

        $marker = array();
        $marker['position']='auto';
        $marker['infowindow_content']='Ubicasion Actual';
        $marker['icon']='http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        \Gmaps::add_marker($marker);

        $map = \Gmaps::create_map();

        return view('reservations.show',compact('gmaps','map'));

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
