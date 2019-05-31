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

// Bind instances of models into the service container.. use auto-resolution

// //Creates new instance everytime called
// app()->bind('example', function() {

// 	return new \App\Example;
// });

// //Instantiates one instance of Example and returns the same instance everytime it's called
// app()->singleton('example', function() {

// 	return new \App\Example;
// });

Route::resource('matches', 'MatchesController');

Route::delete('matches/', 'MatchesController@clear');




Route::resource('tournaments', 'TournamentsController');




Route::patch('tournaments/{tournament}/teams/{team}', 'TournamentTeamsController@update'); 

Route::post('tournaments/{tournament}/teams', 'TournamentTeamsController@store');




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








//Route::post('completed-matches/{match}', 'CompletedMacthesController@store');








