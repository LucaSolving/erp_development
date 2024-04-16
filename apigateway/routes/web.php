<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(OrderController::class)->group(function () {
    Route::get('/demo', 'demo');
    Route::post('/login', 'login');
});

//Route::post('/login',                           [LoginController::class, 'login']);
//Route::post('/login', 'LoginController@login');
