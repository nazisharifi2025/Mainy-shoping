<?php

namespace App\Http\Controllers;

use App\Events\CustomerEvent;
use App\Models\Castumar;
use App\Models\User;
use Illuminate\Http\Request;

class CastumarController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Customer.Home')->with('users' , $users);
    }
    public function Create(Request $request){
        $request->validate([
            "name"=>"required|min:3|max:12",
            "lastName"=>"required|min:4|max:16",
            "email"=> "required|min:7",
            "image"=> "nullable|mimes:png,jpg,jpeg,gif"
        ]);
        $Customer = new Castumar();
        $imgPath = null;
        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('images' , 'public');
        }
        $Customer->name = $request->name;
        $Customer->Lastname = $request->lastName;
        $Customer->email = $request->email;
        $Customer->gender = $request->gender;
        $Customer->img_url = $imgPath;
        event(new CustomerEvent($Customer));
        $Customer->save();
        return redirect('/');
    }
}
