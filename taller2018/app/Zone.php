<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    //
    protected $fillable = [
        'id_zones','zone','city'
    ];
    protected $primaryKey = 'id_zones';
    protected $table = "zones";

}


