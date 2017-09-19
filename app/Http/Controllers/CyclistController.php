<?php

namespace App\Http\Controllers;

use App\cyclist;
use App\team;
use Illuminate\Http\Request;

class CyclistController extends Controller
{
    
	public function index()

	{
		
		$cyclists = cyclist::with('team')->get();
		$teams = team::all();

		return view("admin.cyclists.index", compact("cyclists", "teams"));

	}

	// Create new cycler
  	public function create()

  	{

  		return view('admin.cyclists.create');

  	}


  	// Process form
  	public function store()

	{

		//validate data
		$this->validate(request(), [

			'teamName' => 'required',
			'country' => 'required|max:3'
			
		]);


		team::create([

			'teamName' => request('teamName'),
			'country' => request('country')
			
			]);

		/* method that handles the rider to team
			
			$team->addCycler(request('startnumber', 'lastname', 'firstname', 'nationality'));
		
		*/

		// And then redirect to.. homepage?
		return redirect('/admin/cyclists');
		
  	}


  	// Remove a cycler
  	public function delete($id)

	{
		$nCycler = cyclist::find($id);
		$nCycler->delete();
		return back();

	}


	// edit a cycler
	public function edit(team $team)

	{
		return view('admin.cyclists.edit', compact('cyclists'));

	}


	// Update a cycler
	public function update(Request $request, $id)

	{
		
		$uCyclerm = cyclist::findOrFail($id);

		$this->validate(request(), [

			'teamName' => 'required',
			'country' => 'required|max:3'

		]);

		
		$uCycler->teamName = $request->get('teamName');
		$uCycler->country = $request->get('country');

		$uCycler->save();

		// And then redirect
		return redirect('/admin/teams');

	}

}
