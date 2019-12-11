<?php
namespace App\Controllers;

class AppController extends Controller
{

    public function index()
    {
        $newName = $this->app->old('newName', null); //extract the name from the submission, call it newName to avoid conflicts with partially submitted forms

        return $this->app->view('index', ['newName' => $newName]);
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
            'namer' => 'required' //taken from the name FIELD in the form
        ]);

        $data = [
            // this first 'name' refers to the column name in the database
            'name' => $display = $this->app->input('namer') //taken from the name field in the form
        ]; 
        //dump($data);
        $this->app->db()->insert('results', $data); //insert the value from the input into the 'results' table 

        $this->app->redirect('/', ['newName'=>$data['name']]); //redirect to the index, 

        return "Process the form and persist the new result to the database...";
    }

} 
 