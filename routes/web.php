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

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@index');
Route::post('/login', 'TeamsController@index' );

Route::get('/logout', 'LoginController@logout');


Route::get('/', 'TeamsController@index');
Route::get('/teams/{id}', 'TeamsController@show')->name('teams.show');





Route::get('/players/{id}', 'PlayersController@show');