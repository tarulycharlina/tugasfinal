<?php

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

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page');
});

Route:: get('/home','HomeController@home');
Route:: get('/about','HomeController@about');
Route:: get('/contact','HomeController@contact');
Route:: get('/login','HomeController@login');
Route:: get('/signup','AuthController@signup');
Route:: get('/password','AuthController@password');