<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['file_name', 'product_id'];
    
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    } 
}
