<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

Route::get('/',[CustomerController::class,'index']);
Route::get('/Customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::get('/Order/index',[OrderController::class,'index'])->name('order.index');
Route::get('/Order/create',[OrderController::class,'create'])->name('order.create');    