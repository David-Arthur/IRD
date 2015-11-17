<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'type_id'];
    
    public function gallery()
    {
        return $this->hasMany('App\ProductImage', 'product_id');
    }
    
    public function type()
    {
        return $this->belongsTo('App\ProductType', 'id');
    }
}
