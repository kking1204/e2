@extends('templates.master')

@section('title')
    {{ $app->config('app.name') }}
@endsection





@section('content')
    
    <h2>Let's play Rock Paper Scissors...again...again</h2>

	<form method="POST" action="save-new-result">
        <p>Choose one:</p>
        <div class="radio-group">
            <label for='rock'><input type='radio' name='throw' value='rock' id='rock'> Rock</label>
            <label for='paper'><input type='radio' name='throw' value='paper' id='paper'> Paper</label>
            <label for='scissors'><input type='radio' name='throw' value='scissors' id='scissors'> Scissors</label>
                  
    {{-- I want the error message to appear above the submit button --}}
            @if($app->errorsExist())
            <ul class='error alert alert-danger'>
                @foreach($app->errors() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
               
            <button type='submit' class='btn btn-info'>--Throw--</button>
        </div>
	</form>

{{-- if there's a winner, display the results --}}
    

{{--  --}}

    <div>
        <a href='/results'>See all results &rarr;</a>
    </div>
    
@endsection 


