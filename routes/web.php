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

route::get('/', 'AppointmentController@index');

Route::get('/schedule/appointment', 'AppointmentController@create')->name('app.create')->middleware('auth');
Route::post('/schedule/appointment', 'AppointmentController@store')->name('app.store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->middleware('admin');

Route::get('/Account/{slug}', 'UserController@Account')->name('accountmanger');

Route::delete('/Account/Delete/{slug}/{id}', 'UserController@destroy');