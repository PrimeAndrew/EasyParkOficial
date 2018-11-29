<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_client extends Model
{
    protected $fillable = [
        'entry_date',
        'entry_hour',
        'departure_date',
        'departure_hour',
        'amount',
        'confirmation_code',
        'id_car_fk',
        'id_parking_spaces_fk'
    ];
    protected $primaryKey = 'id_reservations';
    protected $table = "reservations";

}

