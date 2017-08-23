<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stage extends Model
{

	//voor het checken van 1 tabel: Eloquent.
	public static function bergetappe()
	
	{
	
		return static::where('soort_rit', 'berg')->get();
	
	}

	//voor het checken van meerdere waarden: Query scope
	public function scopeLangeRitten($query)

	{

		return $query->where('km', '>', 200);

	}

}    
