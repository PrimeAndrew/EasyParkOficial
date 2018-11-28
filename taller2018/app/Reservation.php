<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Reservation extends Model
{
    protected $fillable = [
        'id_reservations',
        'entry_date',
        'entry_hour',
        'departure_date',
        'departure_hour',
        'amount',
        'confirmation_code',
        //'id_car_fk',
        //'id_parking_spaces_fk'
    ];
    protected $primaryKey = 'id_reservations';
    protected $table = "reservations";
}
