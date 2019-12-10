@extends('templates.master')

@section('title')
    Individual Result
@endsection

@section('content')
    
    <h2>All Results</h2>

    <ul>  
    @foreach ($results as $result)  
        <li>{{$result ['content'] }}</li>
    @endforeach
    </ul>
@endsection