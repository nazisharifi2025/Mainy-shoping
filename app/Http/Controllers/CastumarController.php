<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CastumarController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Customer.Home' , ['users' , $users]);
    }
}
