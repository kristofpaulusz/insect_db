<?php

use App\Http\Controllers\InsectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/insect', [InsectController::class, 'index']);
Route::post('/api/insect', [InsectController::class, 'store']);
Route::get('/api/insect/{id}', [InsectController::class, 'show']);
Route::delete('/api/insect/{id}', [InsectController::class, 'destroy']);
//Route::get('/api/insect/{id}', [InsectController::class, 'update']);
