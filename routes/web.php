<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CastumarController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\GlobalMiddleware;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::get('/' , [ProductController::class , 'landeng']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('Customer')->controller(CastumarController::class)->group(function(){
    Route::get('/' , 'index');
    Route::view('create' , 'Customer.Create');
    Route::post('Create', 'Create');
});
Route::prefix('Product')->controller(ProductController::class)->middleware(GlobalMiddleware::class)->group(function(){
    Route::get('add' , "showform");
    Route::post('create' , 'create');
});
Route::post("cart/add/{id}/{price}" , [CartController::class , "cart"]);
Broadcast::routes();
require __DIR__.'/auth.php';
