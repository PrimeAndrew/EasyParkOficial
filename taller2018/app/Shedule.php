<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    protected $fillable = [
        'id_schedules',
        'open_time',
        'close_time',
        'day'
    ];

    protected $primaryKey = 'id_schedules';
    protected $table = "schedules";
}
