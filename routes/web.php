<?php

use App\Http\Controllers\DrivesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/drives', [DrivesController::class, 'index']);

Route::get('/drives/{id}', [DrivesController::class, 'show']);

Route::get('/about', function () {
    return view('about');
});
