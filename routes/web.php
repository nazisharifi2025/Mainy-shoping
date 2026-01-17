<?php

use App\Http\Controllers\CastumarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('Customer')->controller([CastumarController::class])->group(function(){
    Route::get('/' , 'index');
});