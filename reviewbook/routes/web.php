<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use  App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [FormController::class, 'register']);
Route::post('/welcome', [FormController::class, 'welcome']);

Route::middleware(['auth', IsAdmin::class])->group(function () {
    // CRUD
    // C - CREATE
    Route::get('/genre/create', [GenreController::class, 'create']);
    Route::post('/genre', [GenreController::class, 'store']);

    // E - EDIT
    Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
    Route::put('/genre/{id}', [GenreController::class, 'update']);

    // D - DELETE
    Route::delete('/genre/{id}', [GenreController::class, 'destroy']);
});


// R - READ
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);



// CRUD BOOKS
Route::resource('books', BooksController::class);

// Auth
// Register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'register']);

// Login
Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout 
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
