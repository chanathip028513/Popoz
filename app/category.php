<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $primaryKey = "category_id"; 

    public function Product(){
        return $this->hasMany(Product::class,'category_id');
    }
}
