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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', 'GreetingController@index');
Route::post('/greeting/welcome', 'GreetingController@welcome');
Route::get('/greeting/hello', 'GreetingController@hello');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile/confirm', 'ProfileController@confirm');

Route::get('/lot', 'LotController@index');

Route::get('/employees', 'EmployeesController@index');
Route::get('/employees/create', 'EmployeesController@create');
Route::post('/employees/store', 'EmployeesController@store');

Route::get('/employees/search', 'EmployeesController@search');
