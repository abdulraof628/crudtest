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
Route::apiResource('information', 'InformationController');
Route::apiResource('home', 'HomeController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/new', 'InformationController@index')->name('new');
Route::post('/new', 'InformationController@create')->name('new');
Route::delete('/delete/{information}', 'InformationController@destroy')->name('delete');
Route::get('/edit/{information}', 'InformationController@edit')->name('edit');
Route::patch('/update/{information}', 'InformationController@update')->name('update');
