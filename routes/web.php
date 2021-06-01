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



Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

Route::get('matkul', 'MatkulController@index')->name('matkul-index');
Route::get('matkul/create', 'MatkulController@create')->name('matkul-create');
Route::post('matkul/create', 'MatkulController@store')->name('matkul-store');
Route::get('matkul/edit/{id}', 'MatkulController@edit')->name('matkul-edit');
Route::post('matkul/update/{id}', 'MatkulController@update')->name('matkul-update');
Route::post('matkul/delete/{id}', 'MatkulController@delete')->name('matkul-delete');

Auth::routes();

            