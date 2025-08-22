<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'home']);

Route::get('/register', [DashboardController::class, 'register']);

Route::get('/contact', [DashboardController::class, 'contact']);

Route::get('/course', [DashboardController::class, 'course']);

Route::get('/news', [DashboardController::class, 'news']);

Route::post('/welcome', [FormController::class, 'kirim']);

Route::get('/master', function(){
    return view('layouts.master');
});


// genres
// create
Route::get('/genre/create',[GenreController::class, 'create']);
Route::post('/genre',[GenreController::class, 'store']);

// Read
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);

// Update
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('/genre/{id}', [GenreController::class, 'update']);

//Delete
Route::delete('/genre/{id}',[GenreController::class, 'destroy']);