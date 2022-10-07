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

Route::get('/', 'App\Http\Controllers\postcontroller@index');

Route::get('/index.html', 'App\Http\Controllers\postcontroller@index');


Route::get('/typography.html', 'App\Http\Controllers\postcontroller@typography');

Route::get('/contacts.html', 'App\Http\Controllers\postcontroller@contacts');

Route::get('/about-us.html', 'App\Http\Controllers\postcontroller@about_us');
