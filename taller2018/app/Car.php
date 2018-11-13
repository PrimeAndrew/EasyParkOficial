<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id_car','plate_number','color','id_car_type_fk','id_car_model_fk','id_roles_users_fk','deleted_at'
    ];

    protected $primaryKey = 'id_car';
    protected $table = "cars";
    protected $date = ['deleted_at'];
}
