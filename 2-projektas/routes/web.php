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
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route
::prefix('authors')->group(function (){
//mes sukursime grupe keliu, kurie susije su autoriais
 Route::get('','AuthorController@index')->name('author.index');
 Route::get('create','AuthorController@create')->name('author.create');
 Route::post('store','AuthorController@store')->name('author.store');//
 });

