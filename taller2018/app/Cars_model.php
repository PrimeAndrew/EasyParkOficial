<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars_model extends Model
{
    protected $fillable = [
        'id_car_model', 'model', 'year', 'id_brand_fk'
    ];

    protected $primaryKey = 'id_car_model';
    protected $table = "cars_model";
}