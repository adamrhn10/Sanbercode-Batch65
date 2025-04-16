<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [FormController::class, 'register']);
Route::post('/welcome', [FormController::class, 'welcome']);
