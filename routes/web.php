<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

Route::get('/',[CustomerController::class,'index'])->name('index');
Route::get('/Customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/Customer',[CustomerController::class,'store'])->name('customer.store');
Route::get('/Customer/{customer}/edit',[CustomerController::class,'edit'])->name('customer.edit');
Route::put('/Customer/{customer}',[CustomerController::class,'update'])->name('customer.update');
Route::get('/Customer/{customer}',[CustomerController::class,'show'])->name('customer.show');
Route::delete('/Customer/{customer}',[CustomerController::class,'destroy'])->name('customer.destroy');
Route::get('/Order/index',[OrderController::class,'index'])->name('order.index');
Route::get('/Order/create',[OrderController::class,'create'])->name('order.create');    
Route::post('/Order',[OrderController::class,'store'])->name('order.store');
Route::get('/Order/{order}/edit',[OrderController::class,'edit'])->name('order.edit');
Route::put('/Order/{order}',[OrderController::class,'update'])->name('order.update');
Route::delete('/Order/{order}',[OrderController::class,'destroy'])->name('order.destroy');
// soft delete
Route::get('/Order/trash',[OrderController::class,'trash'])->name('order.trash');
Route::get('/Order/{order}',[OrderController::class,'show'])->name('order.show');
 