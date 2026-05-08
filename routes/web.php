<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

Route::get('/',[CustomerController::class,'index'])->name('index');
Route::get('/Customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/Customer',[CustomerController::class,'store'])->name('customer.store');
Route::get('/Customer/{customer}/edit',[CustomerController::class,'edit'])->name('customer.edit');
Route::put('/Customer/{customer}',[CustomerController::class,'update'])->name('customer.update');
Route::get('/Order/index',[OrderController::class,'index'])->name('order.index');
Route::get('/Order/create',[OrderController::class,'create'])->name('order.create');    