<?php

namespace App\Http\Controllers;

use App\team;
use Illuminate\Http\Request;

class TeamController extends Controller

{
    
		// Teams overview
		public function index()

	  	{
		  	 
			$teams = team::all();

			return view('admin.teams.index', compact('teams'));

	  	}


	  	// Process form
	  	public function store()

		{

			//validate data
			$this->validate(request(), [

				'teamName' => 'required',
				'country' => 'required|max:3'
				
			]);

			addTeam('teamName', 'country');
	
			// And then redirect to.. homepage?
			return back();
			
	  	}


	  	// Remove a team
	  	public function delete($id)

		{
			$nTeam = team::find($id);
			$nTeam->delete();
			return back();

		}


		// edit a team
		public function edit(team $team)

		{
			return view('admin.teams.edit', compact('team'));

		}


		// Update a team
		public function update(Request $request, $id)

		{
			
			$uTeam = team::findOrFail($id);

			$this->validate(request(), [

				'teamName' => 'required',
				'country' => 'required|max:3'

			]);

			
			$uTeam->teamName = $request->get('teamName');
			$uTeam->country = $request->get('country');

			$uTeam->save();

			// And then redirect
			return redirect('/admin/teams');

		}




}
