<?php
	 
$userMove = ($_GET['throw']); //  create variable for user choice
var_dump($userMove); //proof of concept

$throwOptions = ['rock', 'paper', 'scissors']; 

// 	create variable for computer choice (random)
$computerMove = $throwOptions[rand(0, 2)]; // pick a radnom rock (0) paper (1) or scissors (2)
var_dump($computerMove); //proof of concept


if ($userMove == $computerMove) {
    var_dump("it's a tie"); //proof of concept
    } 