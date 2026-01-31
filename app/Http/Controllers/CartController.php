<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(Request $request, $id,$price){
        $product = Product::findOrFail($id);
        $cart = session()->get('cart' , []);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
            'id'=> $product->id,
            'name'=> $product->name,
            'price'=> $price,
            'quantity' => 1
            ];
        }
    }
}
