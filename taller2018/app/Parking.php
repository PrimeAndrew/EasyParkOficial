<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    //
    //use SoftDeletes;
    protected $fillable = [
        'id_parkings','parking_name','parking_address','total_spaces','open_hour','close_hour','latitude','longitud'

    ];
    protected $primaryKey='id_parkings';
}
