<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checkin extends Model
{
    protected $fillable = [
        'id_reservations',
        'entry_date',
        'entry_hour',
        'departure_date',
        'departure_hour',
        'amount',
        'confirmation_code',
        'reservation_state',
        'real_entry_date',
        'real_entry_hour',
        'real_departure_date',
        'real_departure_hour',
        'reservation_type',
        'client_score',
        'parking_score'
    ];
    protected $primaryKey = 'id_reservations';
    protected $table = "reservations";
}
