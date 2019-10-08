<?php
// this is the brains of the rock paper scissors game
// * I define a variable ($throw) that contains 'rocks', 'paper' 'scissors'
// * I then define two variables, PlayerAMove and PlayerBMove. 
// * PlayerAMove chooses a string at random from the $throw variable: 'rocks' (0), 'paper' (1) or 'scissors' (2)
// * PlayerBMove chooses a string at random from the $throw variable: 'rocks' (0), 'paper' (1) or 'scissors' (2)
// * Using conditional logic, I'll declare the winner based on our understanding of rock beating scissors, scissors beating paper, etc.


$options = ['rock', 'paper', 'scissors']; 


$computer = $options[rand(0, 2)]; // rock (0) paper (1) or scissors (2)

if ($playerAMove == $playerBMove) {
    $winner = ("it's a tie");
} elseif ($playerAMove == 'rock' and $playerBMove == 'paper') {
    $winner = ("Player B");
} elseif ($playerAMove == 'rock' and $playerBMove == 'scissors') {
    $winner = ("Player A");
} elseif ($playerAMove == 'paper' and $playerBMove == 'scissors') {
    $winner = ("Player B");
} elseif ($playerAMove == 'paper' and $playerBMove == 'rock') {
    $winner = ("Player A");
} elseif ($playerAMove == 'scissors' and $playerBMove == 'paper') {
    $winner = ("Player A");
} elseif ($playerAMove == 'scissors' and $playerBMove == 'rock') {
    $winner = ("Player B");
}