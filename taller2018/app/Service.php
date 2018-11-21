<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id_services',
        'open',
        'rate_per_hour',
        'id_schedules_fk',
        'id_parkings_fk'
    ];

    protected $primaryKey = 'id_services';
    protected $table = "services";

    ///para la lalve foranea id_schedules_fk que viene de la tabla schedules.Estos son metodos de Eloquent
    public function schedules (){

        return $this -> belongsTo(Schedule::class);
    }

    ///para la lalve foranea id_parkings_fk que viene de la tabla parkings.Estos son metodos de Eloquent
    public function parkings (){

        return $this -> belongsTo(Parking::class);
    }
    ///para la llave que va a temporalcloseds.Estos son metodos de Eloquent
    public function temporal_closeds (){
        return $this -> hasMany(TemporalClosed::class,'id_services_fk');
    }
}
