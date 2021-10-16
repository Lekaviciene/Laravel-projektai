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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route :: prefix('companies')->group(function () {

    Route :: get('','CompanyController@index')->name('company.index')->middleware("auth");
    Route :: get('create','CompanyController@create')->name('company.create')->middleware("auth");
    Route :: post('store','CompanyController@store')->name('company.store')->middleware("auth");
    Route :: get('edit/{company}','CompanyController@edit')->name('company.edit')->middleware("auth");
    Route :: post('update/{company}','CompanyController@update')->name('company.update')->middleware("auth");
    Route :: post('delete/{company}','CompanyController@destroy')->name('company.destroy')->middleware("auth");
    Route :: get('show/{company}','CompanyController@show')->name('company.show')->middleware("auth");
});
