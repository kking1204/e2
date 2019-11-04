<?php
$winner = null;

$playerA = flipCoin(); // executes the function

if ($playerA == 'heads') {
    $playerB = 'tails';
} else {
    $playerB = 'heads';
}

$flip = flipCoin(); // executes the function

if ($playerA == $flip) {
    $winner = 'Player A';
} else {
    $winner = 'Player B';
}

function flipCoin() // defines the function
{
    $coin = ['heads', 'tails'];

    return $coin[rand(0, 1)];
}
