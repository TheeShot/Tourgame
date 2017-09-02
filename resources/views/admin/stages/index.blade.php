@extends ('layouts.admin-master')

@section ('content')
    <div class="container">
		<table class="table table-hover">
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
		      	<th scope="row">{{ $stage->id }}</th>
		      	<td>{{ $stage->start }}</td>
		      	<td>{{ $stage->finish}}</td>
		      	<td>{{ $stage->km }}</td>
		      	<td>{{ $stage->soort_rit }}</td>
		      	<td><a href="/admin/stages/{{ $stage->id }}">view-icon</a></td>
		      	<td><a href="/admin/stages/{{ $stage->id }}">edit-icon</a></td>
		      	<td><a href="{{ route('stage.delete', $stage->id) }}" onclick='return confirm("Zeker weten?")'>Delete</a></td>

		    </tr>

		@endforeach

        </tbody>
        </table>
        <a href="/admin/stages/create" class="btn btn-primary">Etappe toevoegen</a>
    </div>
    <br/>
    <br/>

    
@endsection