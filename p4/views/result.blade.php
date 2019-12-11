@extends('templates.master')

@section('title')
{{ $result['content']}} 
@endsection

@section('content')
    
    <h2>Your result is {{ $result['content']}} </h2>

    <p>Your name is {{ $result['name']}} </p>

    <a href = "/results"> &larr;All results</a>

@endsection