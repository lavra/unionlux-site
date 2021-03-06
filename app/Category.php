<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    /**
     * Products
     * @return array
     **/
    public function products()
    {
        return $this->hasMany(Product::class)->orderBy('order')->whereActive(1);
    }
}
