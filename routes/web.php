<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () { 
    return view('welcome');
});

Route::resource('/contacts', ContactController::class);

Route::get('/register',[RegisterController::class,'register'])->name('register');

Route::post('/register',[RegisterController::class,'create'])->name('registerPost');

Route::get('/login',[LoginController::class,'showLogin'])->name('login');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
