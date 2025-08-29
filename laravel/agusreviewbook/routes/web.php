<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentsController;
use App\Http\Middleware\IsAdmin;

Route::get('/', [DashboardController::class, 'home']);

Route::get('/signup', [DashboardController::class, 'register']);

Route::get('/contact', [DashboardController::class, 'contact']);

Route::get('/course', [DashboardController::class, 'course']);

Route::get('/news', [DashboardController::class, 'news']);

Route::post('/welcome', [FormController::class, 'kirim']);

Route::get('/master', function(){
    return view('layouts.master');
});

//Middleware
Route::middleware(['auth', IsAdmin::class])->group(function () {
    // Genre
    // create
    Route::get('/genre/create',[GenreController::class, 'create']);
    Route::post('/genre',[GenreController::class, 'store']);
    
    // Update
    Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
    Route::put('/genre/{id}', [GenreController::class, 'update']);

    //Delete
    Route::delete('/genre/{id}',[GenreController::class, 'destroy']);

});


// genres

// Read
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);


// CRUD Book
Route::resource('book', BookController::class);

//Auth
//Register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'registeruser']);   

//Login
Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);   

//Logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

//Profile
Route::get('/profile', [AuthController::class, 'getprofile'])->middleware('auth');
Route::post('/profile', [AuthController::class, 'createprofile'])->middleware('auth');
Route::put('/profile/{id}', [AuthController::class, 'updateprofile'])->middleware('auth');

//Comments
Route::post('/comments/{book_id}', [CommentsController::class, 'store'])->middleware('auth');
