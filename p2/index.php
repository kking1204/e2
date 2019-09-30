<?php include 'game-controller.php'; ?>
<!doctype html>
<html lang='en'>
<head>
    <title>Project 2: Rock Paper Scissors</title>
    <meta charset='utf-8'>
        <style>
            body {background-color: powderblue; width: 950px; margin: 0 auto; font-family: sans-serif}
            h1   {color: blue; text-decoration: overline}
            strong {color: red; font-size: larger}
        </style>
</head>

<body>
    <main>
    <h1>Let's play Rock Paper Scissors</h1>
        <p>Player A threw <strong><?php echo $playerAMove ?></strong></p>
        <p>Player B threw <strong><?php echo $playerBMove ?></strong></p>
        <p>The winner is ... <strong><?php echo $winner ?></strong></p>
        <br>
        <p><em>Refresh the page to play again!</em></p>
    </main>
</body>
</html>