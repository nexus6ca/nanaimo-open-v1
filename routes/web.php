<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
Route::get('/register', 'TournamentController@index');
Route::get('/', 'TournamentController@index');
Route::get('/tournament/add', 'TournamentController@add');
Route::get('/tournament/display', 'TournamentController@display');
Route::post('/tournament/save', 'TournamentController@save');
Route::post('/tournament/save/{id}', 'TournamentController@save');
Route::get('/tournament/registered', 'TournamentController@registered');
Route::get('/tournament/backend', 'TournamentController@backend')->middleware('auth');
Route::get('/logout', function(){
    Auth::logout();
    return view('display');
});

Route::any('{all}', 'TournamentController@index')->where('all', '.*');
