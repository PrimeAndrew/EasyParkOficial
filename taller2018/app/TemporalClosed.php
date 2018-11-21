<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporalClosed extends Model
{
    protected $fillable = [
        'id_tempcloses',
        'start_closing',
        'end_closing',
        'description',
        'id_services_fk'
    ];

    protected $primaryKey = 'id_tempcloseds';
    protected $table = "temporal_closeds";
}
