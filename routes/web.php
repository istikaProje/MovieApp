<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;



Route::view('/','home.index')->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware('guest')->group(function(){

    Route::get('/payment',[AuthController::class,'index'])->name('payment');

    Route::view('/register','auth.register')->name('register');
    Route::post('/register',[AuthController::class,'register']);
    
    Route::view('/login','auth.login')->name('login');
    Route::post('/login',[AuthController::class,'login']);
    
    });