@extends ('layouts.admin-master')

@section ('content')
	
	<div class="container">
		<h1><br/>Etappe toevoegen</h1>

		<form method="POST" action="/stages">

			{{ csrf_field() }}

		  <div class="form-group">
		    <label for="date">Datum Etappe</label>
		    <input type="date" name="stage_date" class="form-control" id="stage_date" aria-describedby="stage-date" placeholder="Datum etappe">
		  </div>

		  <div class="form-group">
		    <label for="start">Start Plaatsnaam</label>
		    <input type="text" name="stage_start" class="form-control" id="stage_start" placeholder="Start vind plaats in ...">
		  </div>

		  <div class="form-group">
		    <label for="finish">Finish Plaatsnaam</label>
		    <input type="text" name="stage_finish" class="form-control" id="stage_finish" placeholder="Finish is in ...">
		  </div>

		  <div class="form-group">
		    <label for="km">Aantal km</label>
		    <input type="text" name="stage_km" class="form-control" id="stage_km" placeholder="Aantal kilometer">
		  </div>

		  <div class="form-group">
		    <label for="image">Etappe profiel</label>
		    <input type="text" name="stage_profile" class="form-control" id="stage_profile" placeholder="Link naar profiel afbeelding">
		  </div>

		  <div class="form-group">
		    <label for="stage-sort">Soort rit</label>
		    <select class="form-control" id="stage_sort" name="stage_sort">
		      <option>Vlak</option>
		      <option>Heuvelachtig</option>
		      <option>Berg</option>
		      <option>Tijdrit</option>
		    </select>

		  </div>

		  <button type="submit" class="btn btn-primary">Toevoegen</button>

		</form>
		<br/><br/>

	</div>






@endsection