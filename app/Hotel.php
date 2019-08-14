<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Hotel extends Model
{
	protected $fillable = ['name', 'stars', 'city', 'adress', 'price', 'description'];
	public $timestamps = false;
	
    public function images()
    {
    	return $this->hasMany(Image::class);
    }
}
