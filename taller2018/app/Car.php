<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'id_car','plate_number','color','id_car_type_fk','id_car_model_fk','id_roles_users_fk'
    ];

    protected $primaryKey = 'id_car';
}
