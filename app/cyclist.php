<?php

namespace App;

class cyclist extends Model

{
 
	//Declare relationship with Team
	// $cyclist->team;

	public function team()

	{

		return $this->belongsTo(team::class);

	}


}
