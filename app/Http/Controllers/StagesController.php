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


	public function create()

		{

			return view('stages.create');

	  	}


	public function store()

		{

			// check of alle data goed is: 			dd(request()->all());
			

			// Create a new stage using the request data

			// OPTIE 1
			//$stage = new Stage;
				// $stage->date = request('stage_date');
				// $stage->start = request('stage_start');
				// $stage->finish = request('stage_finish');
				// $stage->km = request('stage_km');
				// $stage->profile_image_link = request('stage_profile');
				// $stage->soort_rit = request('stage_sort');

				// save it to the database
				//$stage->save();

			//OPTIE 2 - needs $fillable or $guarded in model
			stage::create([

				'date' => request('stage_date'),
				'start' => request('stage_start'),
				'finish' => request('stage_finish'),
				'km' => request('stage_km'),
				'profile_image_link' => request('stage_profile'),
				'soort_rit' => request('stage_sort')

				]);

			// And then redirect to.. homepage?
			return redirect('/');


	  	}


}
