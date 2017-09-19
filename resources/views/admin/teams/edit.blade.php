@extends ('layouts.admin-master')

@section ('content')
	
	<div class="container">
		<h1><br/>Team bewerken</h1>


		
		<form method="POST" action="{!! route('team.update', $team->id) !!}">
	
			{{ method_field('PATCH') }}

			<!-- code to verify form is coming from own server -->
			{{ csrf_field() }}

			<!-- checking for errors in submit-->
			@include('layouts.errors')

		  <div class="form-group">
		    <label for="teamName">Team naam</label>
		    <input type="text" name="teamName" class="form-control" id="teamName" aria-describedby="teamName" value="{{{ $team->teamName }}}">
		  </div>

		  <div class="form-group">
		    <label for="country">Land</label>
		    <input type="text" name="country" class="form-control" id="country" placeholder="Land" value="{{{ $team->country }}}">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Aanpassen</button>

		</form>

		

		<br/><br/>

	</div>






@endsection