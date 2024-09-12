<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product_controller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[product_controller::class, 'index']);
Route::post('dashboard/add',[product_controller::class, 'add']);
Route::get('dashboard/{id}/edit',[product_controller::class, 'edit']);
Route::put('dashboard/{id}/update',[product_controller::class, 'update']);
Route::get('dashboard/{id}/destroy',[product_controller::class, 'destroy']);