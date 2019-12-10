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

}
 