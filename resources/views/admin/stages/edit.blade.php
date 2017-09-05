@extends ('layouts.admin-master')

@section ('content')
	
	<div class="container">
		<h1><br/>Etappe bewerken</h1>


		
		<form method="POST" action="{{ route('stage.update', $stage->id) }}">
			<input type="hidden" name="_method" value="PATCH">
			<!-- code to verify form is coming from own server -->
			{{ csrf_field() }}

			<!-- checking for errors in submit-->
			@include('layouts.errors')

		  <div class="form-group">
		    <label for="date">Datum Etappe</label>
		    <input type="date" name="stage_date" class="form-control" id="stage_date" aria-describedby="stage-date" placeholder="Datum etappe" value="{{ $stage->date }}">
		  </div>

		  <div class="form-group">
		    <label for="start">Start Plaatsnaam</label>
		    <input type="text" name="stage_start" class="form-control" id="stage_start" value="{{ $stage->start }}" >
		  </div>

		  <div class="form-group">
		    <label for="finish">Finish Plaatsnaam</label>
		    <input type="text" name="stage_finish" class="form-control" id="stage_finish" value="{{ $stage->finish }}">
		  </div>

		  <div class="form-group">
		    <label for="km">Aantal km</label>
		    <input type="text" name="stage_km" class="form-control" id="stage_km" value="{{ $stage->km }}" >
		  </div>

		  <div class="form-group">
		    <label for="image">Etappe profiel</label>
		    <input type="text" name="stage_profile" class="form-control" id="stage_profile" value="{{ $stage->profile_image_link }}">
		  </div>

		  <div class="form-group">
		    <label for="stage-sort">Soort rit</label>
		    <select class="form-control" id="stage_sort" name="stage_sort" >
		      	
		      	@php

		      		$sorts = array('Vlak', 'Heuvelachtig', 'Berg', 'Tijdrit');
		      		for ($i = 0; $i < 4; $i++){
		      			if($sorts[$i] == $stage->soort_rit){
		      				echo "<option selected>";
		      			}
		      			else {
		      				echo "<option>";
		      			}
		      			echo $sorts[$i] . "</option>";
		      		}
		      	
				@endphp

		    </select>

		  </div>

		  <button type="submit" class="btn btn-primary">Aanpassen</button>

		</form>

		

		<br/><br/>

	</div>






@endsection