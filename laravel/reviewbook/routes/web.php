<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, 'home']);

Route::get('/register', [HomeController::class, 'register']);

Route::post('/welcome', [PostController::class, 'kirim']);