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

Route::get('/', function () {

	$tasks = [
		'Get pool done',
		'Ask Feedback',
		'Put it online'
	];

    return view('welcome', compact('tasks')

    	/* An other way to do this
    	[
    	'name' => 'Stephan'
    	'age' => 19
    	]*/
    	);
});

// stages overview
Route::get('/stages', function ( ) {

	$stages = DB::table('stages')->get();

	return view('stages.index', compact('stages'));
});

// particular stage summary
Route::get('/stages/{stage}', function ($id) {

	$stage = DB::table('stages')->find($id);

	return view('stages.show', compact('stage'));
});
