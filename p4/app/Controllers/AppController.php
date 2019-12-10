<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
       
        return $this->app->view('index');
    }

    public function results()
    {
        $results = ($this->app->db()->all('results'));
     
        // dump($results);
     
        return $this->app->view('results', ['results' => $results]);
        
    }

    public function result()
    {
        return $this->app->view("result");
    }

    public function saveNewResult()
    {       
        $data = [
            // this first 'name' refers to the column name in the database
            'name' => $display = $this->app->input('namer') //taken from the name field in the form
        ]; 
        //dump($data);
        $this->app->db()->insert('results', $data); //insert the value from the input into the 'results' table 

        return "Process the form and persist the new result to the database...";
    }

} 
 