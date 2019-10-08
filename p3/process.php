<?php
	 
$userMove = ($_GET); //  create variable for throw (person choice)	
var_dump($userMove); //proof of concept

$throwOptions = ['rock', 'paper', 'scissors']; 

// 	create variable for computer choice (random)
$computerMove = $throwOptions[rand(0, 2)]; // pick a radnom rock (0) paper (1) or scissors (2)

var_dump($computerMove); //proof of concept







/*
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
*/