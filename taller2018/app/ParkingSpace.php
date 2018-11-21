<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingSpace extends Model
{
    protected $fillable = [
        'id_parking_spaces',
        'space_code',
        'space_status',
        'space_mod_date',
        'id_parkings_fk'

    ];

    protected $primaryKey='id_parking_spaces';
    protected $table = "parking_spaces";
}
