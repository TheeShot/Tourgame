@extends ('layouts.master')

@section ('content')
    <div class="container">
        <div class="col-md-12">
            @foreach ($stages as $stage)
                <a href="stages/stage{{ $stage->id }}">Etappe {{ $stage->id }}: {{ $stage->km }} km </a><br/>
            @endforeach
        </div>
    </div>
@endsection