<?php

//reference to namespace so you dont have to write App/... al the time
// use App\stage;

Route::get('/', function () {

    return view('index');
});


Route::get('/admin', function () {

    return view('admin/index');
});


/*
------------------
ADMIN :: STAGES
------------------
*/

// Stages summary
Route::get('admin/stages', 'StagesController@index');

//add stages
Route::get('admin/stages/create', 'StagesController@create');
Route::post('admin/stages', 'StagesController@store');

// details stages
Route::get('admin/stages/{stage}', 'StagesController@show');

//edit stages
Route::get('admin/stages/edit/{stage}', 'StagesController@edit');
Route::patch('admin/stages/update/{stage}', ['as' => 'stage.update', 'uses' => 'StagesController@update']);

//remove stages
Route::get('admin/stages/delete/{stage}', ['as' => 'stage.delete', 'uses' => 'StagesController@delete']);


/*
------------------
ADMIN :: TEAMS
------------------
*/

// Teams summary
Route::get('admin/teams', 'TeamController@index');

//add teams
Route::post('admin/teams', 'TeamController@store');

//edit teams
Route::get('admin/teams/edit/{team}', 'TeamController@edit');
Route::patch('admin/teams/update/{team}', ['as' => 'team.update', 'uses' => 'TeamController@update']);

//remove teams
Route::get('admin/teams/delete/{team}', ['as' => 'team.delete', 'uses' => 'TeamController@delete']);


/*
------------------
ADMIN :: CYCLISTS
------------------
*/

// view cyclists
Route::get('admin/cyclists', 'CyclistController@index');

//edit cyclists
Route::get('admin/cyclists/edit/{cyclist}', 'CyclistController@edit');
Route::patch('admin/cyclists/update/{cyclist}', ['as' => 'cycler.update', 'uses' => 'CyclistController@update']);

//remove teams
Route::get('admin/cyclists/delete/{cyclist}', ['as' => 'cycler.delete', 'uses' => 'CyclistController@delete']);




?>