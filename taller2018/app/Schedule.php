<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'id_schedules',
        'open_time',
        'close_time',
        'day'
    ];

    protected $primaryKey = 'id_schedules';
    protected $table = "schedules";

    ///para la llave que va a agendas.Estos son metodos de Eloquent
    public function agendas (){
        return $this -> hasMany(Agenda::class,'id_schedules_fk');
    }

    ///para la llave que va a services.Estos son metodos de Eloquent
    public function services (){
        return $this -> hasMany(Service::class,'id_schedules_fk');
    }
}
