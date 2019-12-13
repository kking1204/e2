@extends('templates.master')

@section('title')
{{ $result['content']}} 
@endsection

@section('content')
    
    <p>You chose {{ $result['userMove']}} </p>

    <p>Computer chose {{ $result['computerMove']}} </p>

    <p>{{ $result['winner']}}  </p>

    <a href = "/results"> &larr;All results</a>

@endsection