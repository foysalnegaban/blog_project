<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/loginAdmin',[AuthController::class, 'login']);
Route::post('/loginCreate',[AuthController::class, 'createlogin']);

Route::get('/registerAdmin',[AuthController::class, 'register']);
Route::post('/registerStore',[AuthController::class, 'registerStore']);
Route::get('/forgotPass',[AuthController::class, 'forgot']);
Route::get('/home',[HomeController::class, 'index']);

Auth::routes();


