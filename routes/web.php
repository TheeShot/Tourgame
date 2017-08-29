<?php

//reference to namespace so you dont have to write App/... al the time
use App\stage;

Route::get('/', function () {

    return view('index');
});

// Stages summary
Route::get('/stages', 'StagesController@index');

// details stages
Route::get('/stages/stage{stage}', 'StagesController@show');

//add stages
Route::get('/stages/create', 'StagesController@create');
Route::post('/stages', 'StagesController@store');