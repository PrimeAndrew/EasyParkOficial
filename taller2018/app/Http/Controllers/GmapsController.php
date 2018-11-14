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
    public function index(Request $request)
    {

//utiliza el buscador por zonas del modelo Parking, la variale del request es el name del modelo
        $parkings=Parking::plate($request->get('idzones'))
            ->paginate(3);
        $config = array();
        $config['center'] = ' -16.4897,-68.1193';
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
        $marker['infowindow_content']='Psiciosion actual';

        \Gmaps::add_marker($marker);

        $map = \Gmaps::create_map();



        //Devolver vista con datos del mapa
        return view('reservations.searchParking', compact('map','parkings'));    }



    /**
     * Crasion de mapa para  registrar ubicasion.
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
    public function show($id)
    {
        $nombre='';
      $gmaps=Parking::find($id);
        /*$gmaps=DB::table('parkings')
            ->join('zones','zones.id_zones','=','parkings.id_zones_fk')
            ->select('parkings.parking_name','parkings.parking_address','parkings.total_spaces','parkings.latitude as latitude','parkings.longitud as longitud', 'zones.zone','zones.city')
            ->where('parkings.id_parkings','=',$id)
            ->get();
*/

        //configuaración
        $config = array();
        $config['center'] = ' -16.4897,-68.1193';
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
        //
        $nombre.=$gmaps->parking_name.'<br />'.$gmaps->parking_address.'<br />';

        \Gmaps::initialize($config);
        // Colocar el marcador
        // Una vez se conozca la posición del usuario
        $marker = array();
        $marker['position']=$gmaps->latitude.",".$gmaps->longitud;
        $marker['infowindow_content']=$nombre;
        \Gmaps::add_marker($marker);

        $marker = array();
        $marker['position']='auto';
        $marker['infowindow_content']='Actual';
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
        $parkings=DB::table('parkings')
            ->paginate(3);
        $ocupados=DB::table('parking_spaces')
            ->join('parkings', 'parking_spaces.id_parkings_fk','=', 'parkings.id_parkings')
            ->select(DB::raw('count(parking_spaces.space_status)'),'parking_spaces.space_status as estado',
                'parkings.id_parkings as id_parkings',
                'parkings.parking_name as parking_name',
                'parkings.parking_address as parking_addres',
                'parkings.total_spaces as total_spaces',
                'parkings.open_hour as open_hour',
                'parkings.close_hour as close_hour',
                'parkings.latitude as latitude',
                'parkings.longitud as longitud'
            )
            ->where('parking_spaces.space_status','=','Ocupado')
            ->orWhere('parking_spaces.space_status','=','Reservado')
            ->orWhere('parking_spaces.space_status','=','Cancelado')
            ->orWhere('parking_spaces.space_status','=','Libre')
            ->groupBy('estado','parkings.id_parkings')
            ->get();

        /*   select distinct count(s.space_status),s.space_status as estado,p.parking_name,p.id_parkings
   from parking_spaces s, parkings p
   where s.id_parkings_fk=p.id_parkings
       and s.space_status='Libre'
       or s.space_status='Reservado'
       or s.space_status='Ocupado'
   group by estado,p.parking_name,p.id_parkings
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
        while($ocupados) {
            $marker = array();
            $marker['position']="".$ocupados->latitude.",".$ocupados->longitud."";
            $marker['infowindow_content']=$ocupados->address;
            if ($ocupados->estado!='Libre'){
                \Gmaps::add_marker($marker);
            }
            else{
                $marker['icon']='http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
                \Gmaps::add_marker($marker);

            }

        }


        $map = \Gmaps::create_map();
        //$parkings = Parking::orderBy('id_parkings','ASC')->paginate(2);
        //Devolver vista con datos del mapa
        return view('reservations.searchParking', compact('map','parkings'));
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
