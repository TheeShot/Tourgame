<?php

namespace App\Http\Controllers;

use App\stage;

class StagesController extends Controller

	{


	  public function index()

	  	{

		  	// Eloquent ipv Query Builder option
		  	// Stages overview 
			$stages = stage::all();

			return view('stages.index', compact('stages'));

	  	}


	  public function show(stage $stage)

	  	{

	  		// $stage = stage::find($id);  vervalt vanwege Route Model Binding

			return view('stages.show', compact('stage'));

	  	}




	}
