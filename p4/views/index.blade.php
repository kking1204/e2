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
    
    <h2>Let's play Rock Paper Scissors...again...again</h2>

	<form method="POST" action="save-new-result">
        <p>Choose one:</p>
        <div class="radio-group">
            <input type="radio" value="rock" id="rock" name="throw">
            <label for="rock"> Rock</label>		
            <input type="radio" value="paper" id="paper" name="throw">
            <label for="paper"> Paper</label>
            <input type="radio" value="scissors" id="scissors" name="throw">
            <label for="scissors"> Scissors</label>	
            <button type="submit">----Throw!-----</button>		
        </div>
	</form>

{{-- //if there's a winner, display the results --}}


{{-- @if('winner')
    
    <p>You chose {{ $result['userMove']}} </p>

    <p>Computer chose {{ $result['computerMove']}} </p>

    <p>{{ $result['winner']}}</p>

    <a href = "/results"> &larr;All results</a>

    @endif
    ========== --}}

    <div>
        <a href='/results'>See results &rarr;</a>
    </div>
    
@endsection 


