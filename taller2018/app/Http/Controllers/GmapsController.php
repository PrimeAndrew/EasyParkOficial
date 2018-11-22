<?php

namespace App\Http\Controllers;

use App\Gmaps;
use App\Parking;
use App\ParkingSpace;
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
    public function index(Request $request)
    {

//utiliza el buscador por zonas del modelo Parking, la variale del request es el name del modelo
        $parkings=Parking::plate($request->get('idzones'))
            ->paginate(3);


        $ocupados=DB::table('parking_spaces')
            ->join('parkings', 'parking_spaces.id_parkings_fk','=', 'parkings.id_parkings')
            ->select(DB::raw('count(parking_spaces.space_status) as espacio'),'parking_spaces.space_status as estado',
                'parkings.id_parkings as id_parkings',
                'parkings.parking_name as parking_name',
                'parkings.parking_address as parking_address',
                'parkings.total_spaces as total_spaces',
                'parkings.open_hour as open_hour',
                'parkings.close_hour as close_hour',
                'parkings.latitude as latitude',
                'parkings.longitud as longitud'
            )
            ->groupBy('estado','parkings.id_parkings')
            ->get();
        $config = array();
        $config['center'] = ' -16.4897,-68.1193';
        $config['map_width'] = 500;
        $config['map_height'] = 500;
        $config['zoom'] = 12;
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
        $marker['icon']='http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        $marker['infowindow_content']='Psiciosion actual';
        \Gmaps::add_marker($marker);

        foreach ($parkings as $parking){
            $nombre = $parking->parking_name;
            $latitud = $parking->latitude;
            $longitud = $parking->longitud;
            $to=$parking->total_spaces;
            $idpp=$parking->id_parkings;
            $marker = array();
            $marker['position']=$latitud.",".$longitud;

            foreach ($ocupados as $o){
                $idp=$o->id_parkings;

                if ($idp==$idpp && $o->estado=='Libre'){
                    $marker['infowindow_content']='Nombre: '.$nombre.'<br />total: '.$to.'<br />'.$o->estado.': '.$o->espacio;
                    $marker['icon']='http://www.googlemapsmarkers.com/v1/009900/';
                }
                else{
                    $marker['infowindow_content']='Nombre: '.$nombre.'<br />total: '.$to.'<br />'.$o->estado.': '.$o->espacio;
                }
                \Gmaps::add_marker($marker);
            }

        }

        $map = \Gmaps::create_map();
        //Devolver vista con datos del mapa
        return view('reservations.searchParking', compact('map','parkings','ocupados'));    }



    /**
     * Crasion de mapa para  registrar ubicasion.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //buscara por id del usuario para editar los datos. mandado del formualrio de list
        $park=Parking::find($id)->id_parkings;

        $space= ParkingSpace::where('id_parkings_fk', '=', $park->id_parkings)
            ->paginate(3)
            ->get();

        if ($space->space_status=='Libre'){
            return view('reservations.newReservation',compact('park','space'));
        }
        else{
            Session::flash('message','El parqueo esta lleno');
            return redirect()->action('GmapsController@index');

        }
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
     * Muestra la informacion de un parqueo especifico
     *
     * @param  \App\Gmaps  $gmaps
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $ocupados=DB::table('parking_spaces')
            ->join('parkings', 'parking_spaces.id_parkings_fk','=', 'parkings.id_parkings')
            ->where('parking_spaces.id_parkings_fk','=',$id)
            ->where('parkings.id_parkings','=',$id)
            ->where('parking_spaces.space_status','=','Ocupado')
            ->orWhere('parking_spaces.space_status','=','Reservado')
            ->orWhere('parking_spaces.space_status','=','Cancelado')
            ->orWhere('parking_spaces.space_status','=','Libre')
            ->select(DB::raw('count(parking_spaces.space_status) as espacio'),
                'parking_spaces.space_status as estado',
                'parking_spaces.space_code as codigo',
                'parkings.id_parkings as id_parkings',
                'parkings.parking_name as parking_name',
                'parkings.parking_address as parking_address',
                'parkings.total_spaces as total_spaces',
                'parkings.open_hour as open_hour',
                'parkings.close_hour as close_hour',
                'parkings.latitude as latitude',
                'parkings.longitud as longitud'
            )
            ->orderBy('parking_name','dsc')
            ->groupBy('estado','parkings.id_parkings','codigo')
            ->having('parkings.id_parkings','=',$id)
            ->get('parkings.*','parking_spaces');
        $config = array();
        $config['center'] = ' -16.4897,-68.1193';
        $config['map_width'] = 500;
        $config['map_height'] = 500;
        $config['zoom'] = 12;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
 
            });
        }
        centreGot = true;';

        \Gmaps::initialize($config);

            foreach ($ocupados as $o){
                $idp=$o->id_parkings;
                $nombre = $o->parking_name;
                $latitud = $o->latitude;
                $longitud = $o->longitud;
                $to=$o->total_spaces;
                $marker = array();
                if ($idp==$id && $o->estado ==='Libre'){
                    $marker['icon']='http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
                    $marker['position']=$latitud.",".$longitud;
                    $marker['infowindow_content']='Nombre: '.$nombre.'<br />total: '.$to.'<br />'.$o->estado.': '.$o->espacio;
                }
                else{
                    $marker['position']=$latitud.",".$longitud;
                    $marker['infowindow_content']='Nombre: '.$nombre.'<br />total: '.$to.'<br />'.$o->estado.': '.$o->espacio;
                }

                \Gmaps::add_marker($marker);
            }



        $map = \Gmaps::create_map();
        //Devolver vista con datos del mapa


        return view('reservations.show',compact('ocupados','map'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gmaps  $gmaps
     * @return \Illuminate\Http\Response
     */
    public function edit(Gmaps $gmaps)
    {

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
