<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'id_agendas',
        'state_agenda',
        'date_mod_agenda',
        'id_schedules_fk'
];

    protected $primaryKey = 'id_agendas';
    protected $table = "agendas";

    public function schedules (){

        return $this -> belongsTo(Schedule::class);
    }

}
