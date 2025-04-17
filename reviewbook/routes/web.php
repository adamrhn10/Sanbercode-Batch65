<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [FormController::class, 'register']);
Route::post('/welcome', [FormController::class, 'welcome']);


// CRUD
// C - CREATE
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre', [GenreController::class, 'store']);

// R - READ
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);

// E - EDIT
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('/genre/{id}', [GenreController::class, 'update']);

// D - DELETE
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);

// CRUD BOOKS
Route::resource('books', BooksController::class);