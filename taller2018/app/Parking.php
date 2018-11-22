<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    //
    //use SoftDeletes;
    protected $fillable = [
        'id_parkings','parking_name','parking_address','total_spaces','open_hour','close_hour','latitude','longitud','id_zones_fk','id_price_list_fk'

    ];
    protected $primaryKey='id_parkings';
    protected $table = "parkings";

    //metod para el buscador de parqueo por zona que tiene como parametro al name del diseño
    public function scopePlate($query, $idzones){
        //dd("hola");
        if($idzones!= ""){
            //dd($id_zone);
            $query -> where ("id_zones_fk",$idzones);
          //  dd($query);
        }
    }
    ///para la llave que va a services.Estos son metodos de Eloquent
    public function services (){
        return $this -> hasMany(Service::class,'id_parkings_fk');
    }
}
