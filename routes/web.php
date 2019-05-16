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

Route::get('/', 'PagesController@home');

Route::get('setup', 'PagesController@setup');

Route::get('bracket', 'PagesController@bracket');

Route::get('play', 'PagesController@play');

Route::get('/teams', 'TeamsController@index');

Route::post('/teams', 'TeamsController@store');

Route::delete('teams/', 'TeamsController@clear');

Route::patch('teams/{team}', 'TeamsController@update')->name('teams.update');

Route::get('teams/{team}/edit', 'TeamsController@edit')->name('teams.edit');

Route::get('teams/{team}', 'TeamsController@show')->name('teams.show');

Route::delete('teams/{team}', 'TeamsController@destroy');

Route::resource('matches', 'MatchesController');

Route::delete('matches/', 'MatchesController@clear');

// Route::get('/matches', 'MatchesController@index');

// Route::get('/matches/create', 'MatchesController@create');

// Route::get('matches/{match}', 'MatchesController@show');

// Route::post('matches/', 'MatchesController@store');

// Route::get('matches/{match}/edit', 'MatchesController@edit');

// Route::patch('matches/{match}', 'MatchesController@update');

// Route::delete('matches/{match}', 'MatchesController@destroy');







