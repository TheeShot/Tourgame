@extends ('layouts.admin-master')

@section ('content')
    

		<div class="container">
			
			<h1 class="display-4">Etappe management</h1>

			<p class="lead"> Voeg de etappes uit de tour toe. Dit is belangrijk voor de verwerking van de standen. Hier komt later een button "importeer etappes", welke het mogelijk zal maken de etappes van de officiele tour de france website te kopieren. (Dat is het plan)
			</p>

		

			<table class="table table-md table-hover">
				<thead>
					<tr>
				    	<th>#</th>
				    	<th>Start</th>
				    	<th>Finish</th>
				    	<th>Km</th>
				     	<th>Soort</th>
				     	<th></th>
				     	<th></th>	
				     	<th></th>
				    </tr>
				</thead>
				<tbody>

	        @foreach ($stages as $stage)
	        	<tr>
			      	<th scope="row">{{{ $loop->iteration }}}</th>
			      	<td>{{{ $stage->start }}}</td>
			      	<td>{{{ $stage->finish}}}</td>
			      	<td>{{{ $stage->km }}}</td>
			      	<td>{{{ $stage->soort_rit }}}</td>

			      	<!-- VIEW -->
			      	<td width="1.5rem" class="table-success">
			      		<a href="/admin/stages/{{{ $stage->id }}}">
			      		<i class="fa fa-eye fa-1x success" aria-hidden="true"></i>
			      		</a>
			      	</td>
			      	
			      	<!-- EDIT -->
			      	<td width="1.5rem" class="table-info">
			      		<a href="/admin/stages/edit/{{{ $stage->id }}}">
			      		<i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i>
			      		</a>
			      	</td>

			      	<!-- DELETE -->
			      	<td width="1.5rem" class="table-danger">
			      		<a href="{{{ route('stage.delete', $stage->id) }}}" onclick='return confirm("Zeker weten?")'>
			      		<i class="fa fa-trash danger fa-1x" aria-hidden="true"></i>
			      		</a>
			      	</td>

			    </tr>

			@endforeach

	        </tbody>
	      </table>

        	<a href="/admin/stages/create" class="btn btn-primary">Etappe toevoegen</a>
       </div>
    <br/>
    <br/>

@endsection