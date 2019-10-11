<?php require 'process-controller.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>E2 P2 Design A: Results</title>
        <style>
            body {background-color: powderblue; width: 950px; margin: 0 auto; font-family: sans-serif}
        </style>
	</head>
	<body>
		<h1>Results</h1>
		<p> You chose <strong><?php echo($userMove);?></strong>
		<p> The computer chose <strong><?php echo($computerMove);?></strong>
		<br><br>
		<p> <?php echo($winner);?>
		<br><br>
		<p><a href="index.php">Play again</a> </p>
	</body>
</html>
