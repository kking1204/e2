<?php
// this is the brains of the rock paper scissors game
// * I define a variable ($throw) that contains 'rocks', 'paper' 'scissors'
// * I then define two variables, PlayerAMove and PlayerBMove. 
// * PlayerAMove chooses a string at random from the $throw variable: 'rocks' (0), 'paper' (1) or 'scissors' (2)
// * PlayerBMove chooses a string at random from the $throw variable: 'rocks' (0), 'paper' (1) or 'scissors' (2)
// * Using conditional logic, I'll declare the winner based on our understanding of rock beating scissors, scissors beating paper, etc.


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


