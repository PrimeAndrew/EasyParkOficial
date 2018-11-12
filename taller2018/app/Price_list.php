<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price_list extends Model
{
    //
    protected $fillable = [
        'id_prices_list','lower_range','top_range','price','date_registry','state','user_id','host_id'
    ];
    protected $primaryKey = 'id_prices';
    protected $table = "price_list";
}
