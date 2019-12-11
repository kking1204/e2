@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@if ($name)

    Great job, <strong>{{ $name }}</strong>!
    
@endif 


@section('content')
    
    <p>Hello! This is my final project. I will probably add the coin toss game here.</p>

    <form method="POST" action="save-new-result">
        <label for="namer">Enter Your Namer</label>
        <input type="text" id="namer" name="namer"> {{-- the dB fetches by name, not id --}}
        
    <button type="submit" class ="btn btn-primary">Submit!</button>
    </form>
@endsection 