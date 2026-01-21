<?php

namespace App\Models;

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Prodetails(){
        return $this->hasOne(ProductController::class,'product_id');
    }
}
