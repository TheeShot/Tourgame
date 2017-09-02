@extends ('layouts.admin-master')

@section ('content')
    <div class="container">
        <img src="{{ $stage->profile_image_link }}" width="100%"/><br/>
        <strong>Start:</strong> {{ $stage->start }} <br/>
        <strong>Finish:</strong> {{ $stage->finish }} <br/>
        <strong>Afstand:</strong>    {{ $stage->km }} km <br/>
        <strong>Soort:</strong>  {{ $stage->soort_rit }} <br/>
    </div>
@endsection

