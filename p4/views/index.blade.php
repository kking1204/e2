@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }}
@endsection



@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

@section('content')
    
    <p>Hello! This is my final project. I will probably add the rock-paper-scissors game here.</p>

    <form method="POST" action="save-new-result">
        <label for="namer">Enter Your Namer</label>
    <input type="text" id="namer" name="namer" value="{{ $app->old ('namer') }}"> {{-- the dB fetches by name, not id --}}
    <button type="submit" class ="btn btn-primary">Submit!</button>
    </form>

    @if ($newName)
        <div class="alert alert-success">
            <p>Great job, <strong>{{ $newName }}</strong>!</p>
            <a href = "/results"> See all results &rarr;</a>
        </div>
    @endif 
    
@endsection 


