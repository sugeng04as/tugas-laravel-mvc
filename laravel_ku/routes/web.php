<?php

use Illuminate\Support\Facades\Route;

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

//Menggunakan Controller
Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@regist');
Route::post('/welcome', 'AuthController@wlcom');

//Tidak
/* Route::get('/', function(){
    return view('index')
    });


