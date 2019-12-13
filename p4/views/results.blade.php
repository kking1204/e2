@extends('templates.master')

@section('title')
All Results
@endsection

@section('content')
    
@if($app->old('resultNotFound'))
    <div class="alert alert-warning">
        Sorry, there was no result with that ID
    </div>
@endif
    <h2>All Results</h2>

    <ul>  
    @foreach ($results as $result)  
        <li> <a href='/result?id={{$result ['id']}} '>{{$result ['userMove'] }} </a></li>
    @endforeach
    </ul>
@endsection