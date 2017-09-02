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
Route::get('/admin/stages', 'StagesController@index');

// details stages
Route::get('admin/stages/stage{stage}', 'StagesController@show');

//add stages
Route::get('admin/stages/create', 'StagesController@create');

Route::post('admin/stages', 'StagesController@store');