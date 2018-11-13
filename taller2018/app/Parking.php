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
}
