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

Route::get('/', function () { // index.php
    return view('welcome'); //welcome    .blade.php
});

Route::get('/pirmasispuslapis', function () {
    return view('pirmasispuslapis');
});

Route::get('/pakartotinenuoroda', function () {
    return view('pirmasispuslapis');
});

Route::get('/antraspuslapis', function () {
    return view('antrasvaizdas');
});
