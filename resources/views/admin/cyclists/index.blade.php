@extends ("layouts.admin-master")

@section ("content")

	<div class="container">
			
		<h1 class="display-4">Wielrenners beheer</h1>

		<p class="lead"> Hier vind je alle renners van een team die mee (zouden kunnen) doen aan de Tour de France. Door de kollom "Start" kun je zien welke renners daadwerkelijk door het team zijn geselecteerd om deel te nemen. Op zaterdag, vlak voor de start van de eerste etappe, zullen alle definitieve teams bekend zijn.
		</p><br/>

	

		<div class="row">
			
				
				
				@foreach ($teams as $team)

					<div class="col-sm-6">
					
						<h3 class="teamname">{{{ $team->teamName }}}</h3>

						<table class="table table-sm table-hover">
							<thead>
								<tr>
									<th>Startnr.</th>
									<th>Achternaam</th>
									<th>Voornaam</th>
									<th>Nat.</th>
									<th>Start</th>
									<th></th>
							     	<th></th>
							     	<th></th>
								</tr>
							</thead>
							<tbody>

					@foreach ($cyclists as $cycler)
						@if ($cycler->team_id == $team->id)
							<tr>	
								<th scope="row"> {{{ $cycler->startNumber }}}</th>
						      	<td>{{{ $cycler->firstName }}}</td>
						      	<td>{{{ $cycler->lastName }}} </td>
						      	<td> {{{ $cycler->nationality }}}</td>
						      	<td> 
						      		@if ($cycler->start)
						      			V
						      		@else
						      			X
						      		@endif
						      	</td>

						      	<!-- EDIT -->
						      	<td width="1.5rem">
						      		<a href="/admin/cyclists/edit/{{{ $cycler->id }}}">
						      		<i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i>
						      		</a>
						      	</td>

						      	<!-- DELETE -->
						      	<td width="1.5rem">
						      		<a href="{{{ route('cycler.delete', $cycler->id) }}}" onclick='return confirm("Zeker weten?")'>
						      		<i class="fa fa-trash danger fa-1x" aria-hidden="true"></i>
						      		</a>
						      	</td>


						    </tr>
						@endif
					@endforeach

								
							</body>
						</table>
						<br/>
					</div>
				
				@endforeach	
				
		</div>		
	</div>


						
	


@endsection