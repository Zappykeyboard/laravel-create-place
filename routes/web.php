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

Route::get('/emp', 'EmployeeController@index')->name('emp.index');
Route::get('/emp/create', 'EmployeeController@create')->name('emp.create');
Route::post('/emp', 'EmployeeController@store')->name('emp.store');


Route::get('/','PlaceController@index')->name('place.index');
Route::get('/create', 'PlaceController@create')->name('place.create');
Route::post('/', 'PlaceController@store')->name('place.store');
