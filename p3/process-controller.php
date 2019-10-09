<?php

session_start(); //invoke the Session
	 
$userMove = ($_GET['throw']); //  create variable for user choice
var_dump($userMove); //proof of concept

$throwOptions = ['rock', 'paper', 'scissors']; 

// 	create variable for computer choice (random)
$computerMove = $throwOptions[rand(0, 2)]; // pick a radnom rock (0) paper (1) or scissors (2)
var_dump($computerMove); //proof of concept

    
if ($userMove == $computerMove) {
    $winner = ("it's a tie");
} elseif ($userMove == 'rock' and $computerMove == 'paper') {
    $winner = ("Player B");
} elseif ($userMove == 'rock' and $computerMove == 'scissors') {
    $winner = ("Player A");
} elseif ($userMove == 'paper' and $computerMove == 'scissors') {
    $winner = ("Player B");
} elseif ($userMove == 'paper' and $computerMove == 'rock') {
    $winner = ("Player A");
} elseif ($userMove == 'scissors' and $computerMove == 'paper') {
    $winner = ("Player A");
} elseif ($userMove == 'scissors' and $computerMove == 'rock') {
    $winner = ("Player B");
};

    var_dump($winner); //proof of concept
    
 
 
 
 $_SESSION['thro'] = $_GET['throw'];   
 
 $d = $_SESSION['thro'];
 
 var_dump($d);
 
 header('Location: index.php')