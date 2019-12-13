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
     
        // dump($results);
     
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

        $data = [
            // 'userMove' refers to the column name in the database
            'userMove' => $display = $this->app->input('throw') //taken from the name field 'throw' in the form
        ]; 
       
        $this->app->db()->insert('results', $data); //insert the value from the 'throw'' into the 'results' table 

        $this->app->redirect('/', ['newName'=>$data['name']]); //redirect to the index, 
    }

} 
 