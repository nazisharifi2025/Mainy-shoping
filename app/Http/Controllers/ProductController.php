<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetails;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function landeng(){
        $products = Product::with('Prodetails')->get();
        // return $products;
        return view('welcome' ,['products'=> $products]);
    }
    public function showform(){
        return view('Product.add');
    }
    public function create(Request $request){
        $path = null;
        if($request->hasFile('img')){
            $path = $request->file('img')->store('Productimages' , 'public');
        }
        $product = new Product();
        $product->name = $request->name;
        $product->save();
        $productDetails = new ProductDetails();
        $productDetails->price = $request->price;
        $productDetails->Description = $request->des;
        $productDetails->quantity = $request->quantity;
        $productDetails->made_in = $request->madeIn;
        $productDetails->product_id = $product->id;
        $productDetails->img_url = $path;
        $productDetails->save();
        return redirect('/');
    }
}
