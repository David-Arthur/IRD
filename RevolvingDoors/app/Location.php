<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['state', 'country'];

    public function reps()
    {
    	return $this->belongsToMany('App\Rep', 'rep_location');
    }
}
