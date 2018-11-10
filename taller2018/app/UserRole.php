<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'id_roles_users',
        'id_users_fk',
        'id_roles_fk',
        'id_parkings_fk'
    ];
    protected $primaryKey = 'id_roles_users';
    protected $table = "users_roles";
}
