<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;


Route::get('/', [DashboardController::class, 'home']);

Route::get('/register', [DashboardController::class, 'register']);

Route::get('/contact', [DashboardController::class, 'contact']);

Route::get('/course', [DashboardController::class, 'course']);

Route::get('/news', [DashboardController::class, 'news']);

Route::post('/welcome', [FormController::class, 'kirim']);

Route::get('/master', function(){
    return view('layouts.master');
});
