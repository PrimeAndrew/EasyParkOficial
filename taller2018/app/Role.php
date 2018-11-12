<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id_roles',
        'roles_description'
    ];
    protected $primaryKey = 'id_roles';
    protected $table = "roles";
}
