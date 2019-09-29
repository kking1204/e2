<?php
// this is the brains of the rock paper scissors game



$throw = ['rock', 'paper', 'scissors']; 

$playerAMove = $throw[rand(0, 2)]; // pick a random string
$playerBMove = $throw[rand(0, 2)]; // rock (0) paper (1) or scissors (2)

// var_dump($playerAMove);
// var_dump($playerBMove);

if ($playerAMove == $playerBMove) {
    // var_dump("it's a tie");
} elseif ($playerAMove == 'rock' and $playerBMove == 'paper') {
    // var_dump('Player B wins');
} elseif ($playerAMove == 'rock' and $playerBMove == 'scissors') {
    // var_dump('Player A wins');
} elseif ($playerAMove == 'paper' and $playerBMove == 'scissors') {
    // var_dump('Player B wins');
} elseif ($playerAMove == 'paper' and $playerBMove == 'rock') {
    // var_dump('Player A wins');
} elseif ($playerAMove == 'scissors' and $playerBMove == 'paper') {
    // var_dump('Player A wins');
} elseif ($playerAMove == 'scissors' and $playerBMove == 'rock') {
    // var_dump('Player B wins');
}


