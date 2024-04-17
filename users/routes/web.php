<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Las rutas libre del middleware
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::controller(LoginController::class)->group(function () {
    Route::post('/login', 'login');
});
Route::get('/logout',                           [LogoutController::class, 'perform']);

Route::group(['middleware' => 'auth'], function () {
    Route::view('/dashboard', 'home.dashboard');
});
