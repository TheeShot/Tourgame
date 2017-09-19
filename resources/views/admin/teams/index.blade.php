@extends ('layouts.admin-master')

@section ('content')
		
		<div class="container">
			
			<h1 class="display-4">Beheer teams</h1>

			<p class="lead"> Voeg de wielerteams toe die meedoen aan de Tour de France. Nu zal dit nog handmatig moeten gebeuren, maar in de toekomst zal dit automatisch gebeuren.
			</p>

		</div>

		<table class="table table-md table-hover">
			<thead>
				<tr>
			    	<th>#</th>
			    	<th>Team</th>
			    	<th>Land</th>
			    	<th></th>
			     	<th></th>
			    </tr>
			</thead>
			<tbody>

	        @foreach ($teams as $team)
	        	
	        	<tr>
			      	<th scope="row">{{{ $team->id }}}</th>
			      	<td>{{{ $team->teamName }}}</td>
			      	<td>{{{ $team->country }}}</td>


			      	<!-- EDIT -->
			      	<td width="1.5rem" class="table-info">
			      		<a href="/admin/teams/edit/{{{ $team->id }}}">
			      		<i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i>
			      		</a>
			      	</td>

			      	<!-- DELETE -->
			      	<td width="1.5rem" class="table-danger">
			      		<a href="{{{ route('team.delete', $team->id) }}}" onclick='return confirm("Zeker weten?")'>
			      		<i class="fa fa-trash danger fa-1x" aria-hidden="true"></i>
			      		</a>
			      	</td>
			    </tr>

			@endforeach

        	</tbody>
        </table>

        <br/>
        <hr />

        	<h3><br/>Team toevoegen</h3>

			<form method="POST" action="/admin/teams">

				<!-- code to verify form is coming from own server -->
				{{ csrf_field() }}

				<!-- checking for errors in submit-->
				@include('layouts.errors')

  	
			  	<div class="row">
			  		
			  		<div class="col-sm-8">
			    		<input type="text" name="teamName" class="form-control" id="teamName" aria-describedby="teamName" placeholder="Team naam">
			    	</div>

			    	<div class="col-sm-4">
						<input type="text" name="country" class="form-control" id="country" placeholder="Land" >
			    	</div>

			  	</div>
			    
			    <br/> <button type="submit" class="btn btn-primary">Toevoegen</button>

			</form>

    <br/>

    
@endsection