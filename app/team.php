<?php

namespace App;

class team extends Model

{
 
	//Declare relationship with Cyclists
	public function cyclists() 

	{

		return $this->hasMany(cyclist::class);

	}

	public function addTeam($name, $nat){

		
		team::create([
		
			'teamName' => $name,
			'country' => $nat
			
		]);

	}


}
