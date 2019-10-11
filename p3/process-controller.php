<?php

// if nothing is selected, don't let that button Submit! 
if(!isset($_GET['throw'])) {
	header('Location: index.php');
}

 // create variable for user choice
$userMove = ($_GET['throw']);

// create variable for computer choice (random)
$throwOptions = ['rock', 'paper', 'scissors']; 

// pick a radnom rock (0) paper (1) or scissors (2)
$computerMove = $throwOptions[rand(0, 2)]; 

// my clunky attempt at logic
if ($userMove == $computerMove) {
    $winner = ("it's a tie");
} elseif ($userMove == 'rock' and $computerMove == 'paper') {
    $winner = ("You lose! Paper covers rock");
} elseif ($userMove == 'rock' and $computerMove == 'scissors') {
    $winner = ("You win - rock beats scissors");
} elseif ($userMove == 'paper' and $computerMove == 'scissors') {
    $winner = ("You lose! Scissors cut paper!");
} elseif ($userMove == 'paper' and $computerMove == 'rock') {
    $winner = ("You win! Paper covers rock");
} elseif ($userMove == 'scissors' and $computerMove == 'paper') {
    $winner = ("You win! scissors cut paper");
} elseif ($userMove == 'scissors' and $computerMove == 'rock') {
    $winner = ("You win - rock beats scissors");
};
