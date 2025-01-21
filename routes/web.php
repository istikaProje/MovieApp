<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\StripeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShowPaymentController; 


//Route::get('/payment', [ShowPaymentController::class, 'show'])->name('payment.page');
//Route::post('/payment', [ShowPaymentController::class, 'process'])->name('payment.process');
Route::view('/','home.index')->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');
Route::middleware('guest')->group(function(){

    Route::view('/register','auth.register')->name('register');
    Route::post('/register',[AuthController::class,'register']);
    
    Route::view('/login','auth.login')->name('login');
    Route::post('/login',[AuthController::class,'login']);
});

Route::controller(ShowPaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::view('/payment','layouts.payments')->name('payment');




