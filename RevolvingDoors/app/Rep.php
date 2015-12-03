<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rep extends Model
{
    protected $fillable = ['name', 'description', 'avatar'];

    public function locations()
    {
    	return $this->belongsToMany('App\Location', 'rep_location', 'rep_id', 'location_id');
    }
}
