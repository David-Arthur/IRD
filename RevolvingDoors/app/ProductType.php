<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProductType extends Model
{
    protected $fillable = ['name', 'description'];
    
    public function products()
    {
        return $this->hasMany('App\Product', 'type_id');
    }
}
