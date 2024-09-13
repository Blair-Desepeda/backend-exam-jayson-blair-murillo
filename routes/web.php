<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product_controller;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('product',[product_controller::class, 'index']);
    Route::post('product/add',[product_controller::class, 'add']);
    Route::get('product/{id}/edit',[product_controller::class, 'edit']);
    Route::put('product/{id}/update',[product_controller::class, 'update']);
    Route::get('product/{id}/destroy',[product_controller::class, 'destroy']);

    Route::get('add-user',[user_controller::class, 'home']);
    Route::post('user/add',[user_controller::class, 'add']);
    Route::get('user/{id}/edit',[user_controller::class, 'edit']);
    Route::put('user/{id}/update',[user_controller::class, 'update']);
    Route::get('user/{id}/destroy',[user_controller::class, 'destroy']);
   
    Route::post('logout',[AuthenticatedSessionController::class, 'destroy']);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
