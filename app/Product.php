<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = "id_product";

    public function Category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}

