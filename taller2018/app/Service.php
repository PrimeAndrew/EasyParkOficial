<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id_services',
        'open',
        'rate_per_hour',
        'id_schedules_fk',
        'id_parkings_fk'
    ];

    protected $primaryKey = 'id_services';
    protected $table = "services";
}
