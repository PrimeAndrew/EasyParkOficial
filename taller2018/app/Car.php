<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Car extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id_car','plate_number','color','id_car_type_fk','id_car_model_fk','id_roles_users_fk','deleted_at'
    ];

    protected $primaryKey = 'id_car';
    protected $table = "cars";
    protected $date = ['deleted_at'];

    public function cars_type (){

        return $this -> belongsTo(Cars_type::class);
    }


    public function scopePlate($query, $plate_number){

        if(trim($plate_number != "")){
            $id_auth = Auth::id();
            $query -> where ("plate_number","like","%$plate_number%")->where("id_roles_users_fk",$id_auth);

        }
    }
}
