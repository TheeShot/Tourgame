<?php

//reference to namespace so you dont have to write App/... al the time
use App\stage;

Route::get('/', function () {

    return view('index');
});

/*
---------------
ADMIN
---------------
*/

Route::get('/admin', function () {

    return view('admin/index');
});

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







