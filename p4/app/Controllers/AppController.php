<?php
namespace App\Controllers;

class AppController extends Controller
{

    public function index()
    {
       return $this->app->view('index');
    }

    public function results()
    {
        $results = ($this->app->db()->all('results'));
         
        return $this->app->view('results', ['results' => $results]);
        
    }

    public function result()
    {

        $resultID = $this-> app->param('id');
        
        $result = $this->app->db()->findById('results', $resultID); //go into results table, display the id 

        if (is_null($result)) {
            return $this->app->redirect('/results', [resultNotFound => true]);
        }

        return $this->app->view('result', ['result' => $result]);
    }

    public function saveNewResult()
    {       
        
        $this->app->validate([
            'throw' => 'required'
        ]);

            // create variable for computer choice (random)
        $throwOptions = ['rock', 'paper', 'scissors']; 

        // pick a random rock (0) paper (1) or scissors (2)
        $computerMove = $throwOptions[rand(0, 2)]; 
        $userMove = $this->app->input('throw');


        // my clunky attempt at logic
        if ($userMove == $computerMove) {
            $winner = ("It's a tie! Play again.");
        } elseif ($userMove == 'rock' and $computerMove == 'paper') {
            $winner = ("You lose! paper covers rock!");
        } elseif ($userMove == 'rock' and $computerMove == 'scissors') {
            $winner = ("You win - rock beats scissors.");
        } elseif ($userMove == 'paper' and $computerMove == 'scissors') {
            $winner = ("You lose! scissors cut paper!");
        } elseif ($userMove == 'paper' and $computerMove == 'rock') {
            $winner = ("You win! paper covers rock.");
        } elseif ($userMove == 'scissors' and $computerMove == 'paper') {
            $winner = ("You win! scissors cut paper.");
        } elseif ($userMove == 'scissors' and $computerMove == 'rock') {
            $winner = ("You win - rock beats scissors!");
        };


        $data = [  
            // 'userMove' refers to the column name in the database
            'userMove' => $userMove, //taken from the name field 'throw' in the form
            // 'computerMove' refers to the column name in the database
            'computerMove' => $computerMove,
            'winner' => $winner
        ]; 
       
        $this->app->db()->insert('results', $data); //insert into the dB
            
        dump($data);
       
        # display stuff on screen
        return $this->app->view('index', [
            $data
        ]);
    }

} 
 