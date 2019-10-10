<?php require 'process-controller.php';?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>E2 P2 Design A</title>
        <style>
            body {background-color: powderblue; width: 950px; margin: 0 auto; font-family: sans-serif}
        </style>
	</head>
	<body>
		<p> You chose <?php echo($userMove);?>
		<p> The computah chose <?php echo($computerMove);?>
		<p> <?php echo($winner);?>
		<p> <a href="index.php">Play again</a> </p>
	</body>
</html>
