<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Category
     * @return array
     **/
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
