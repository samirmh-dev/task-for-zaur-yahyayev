<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['airline', 'plane', 'arrival_date', 'arrival_time', 'price', 'destination', 'departure', 'adult', 'description'];
    
    public $timestamps = false;
}
