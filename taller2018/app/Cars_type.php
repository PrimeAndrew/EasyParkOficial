<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars_type extends Model
{
    protected $fillable = [
        'id_car_type','car_type'
    ];

    protected $primaryKey = 'id_car_type';
    protected $table = "cars_type";

    public function cars (){
        //return $this -> hasMany('App\Car', 'id_car_type_fk', 'id_car');
        return $this -> hasMany(Car::class,'id_car_type_fk');
    }
}

