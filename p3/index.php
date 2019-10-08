<!doctype html>
<html lang='en'>
<head>
    <title>Project 3: Rock Paper Scissors w User Input</title>
    <meta charset='utf-8'>
        <style>
            body {background-color: powderblue; width: 950px; margin: 0 auto; font-family: sans-serif}
            h1   {color: blue; text-decoration: overline}
            strong {color: red; font-size: larger}
        </style>
</head>

<body>

    <h1>Let's play Rock Paper Scissors...again</h1>

	<form method="GET" action="process.php">
	
		<input type="radio" value="rock" id="rock" name="throw">
		<label for="rock"> Rock</label>
		
		<input type="radio" value="paper" id="paper" name="throw">
		<label for="paper"> Paper</label>
		
		<input type="radio" value="scissors" id="scissors" name="throw">
		<label for="scissors"> Scissors</label>	

		<button type="submit">Throw!</button>		
	</form>



</body>
</html>