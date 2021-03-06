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

Route::get('/', 'TeamsController@index')->name('teams.index');

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login' )->middleware('verification.email');

Route::get('/verify/{verification_code}', 'RegisterController@verify');

Route::get('/logout', 'LoginController@logout');

Route::get('/news', 'NewsController@index');
Route::get('/news/{news_id}', 'NewsController@show');

Route::get('/teams/{id}', 'TeamsController@show')->name('teams.show');
Route::post('/teams/{team_id}/comments', 'CommentsController@store')->middleware('forbidden.words');







Route::get('/players/{id}', 'PlayersController@show');