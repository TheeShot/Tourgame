<?php

//reference to namespace so you dont have to write App/... al the time
use App\stage;

Route::get('/', function () {

    return view('index');
});


Route::get('/stages', 'StagesController@index');

Route::get('/stages/{stage}', 'StagesController@show');