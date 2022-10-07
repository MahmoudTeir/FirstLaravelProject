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

Route::get('/', function () {
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});


Route::get('/typography.html', function () {
    return view('typography');
});

Route::get('/contacts.html', function () {
    return view('contacts');
});

Route::get('/about.html', function () {
    return view('about');
});

Route::get('/about-us.html', function () {
    return view('about-us');
});
