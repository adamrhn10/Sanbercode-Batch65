<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use GuzzleHttp\Promise\Create;

Route::get('/', function () {
    return view('welcome');
});

//Route GameController
// C -> Create
Route::get('/controller/create', [GameController::class, 'create']);
Route::post('/controller', [GameController::class, 'store']);

// R -> Read
Route::get('/controller', [GameController::class, 'index']);
Route::get('/controller/{$id}', [GameController::class, 'show']);
