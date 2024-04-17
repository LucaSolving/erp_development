<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});
Route::controller(LoginController::class)->group(function () {
    Route::post('/login', 'login');
});
Route::controller(OrderController::class)->group(function () {
    Route::get('/demo', 'demo');
    Route::post('/login', 'login');
});

//Route::post('/login',                           [LoginController::class, 'login']);
//Route::post('/login', 'LoginController@login');

