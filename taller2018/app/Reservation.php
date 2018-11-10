<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $fillable = [
        'id_reservations',
        'reservation_entry_date',
        'reservation_departure_date',
        'amount','confirmation_code',
        'reservation_state',
        'real_entry_date',
        'real_departure_date',
        'reservation_type',
        'client_score',
        'parking_score'
    ];
    protected $primaryKey = 'id_reservations';
    protected $table = "reservations";
}
