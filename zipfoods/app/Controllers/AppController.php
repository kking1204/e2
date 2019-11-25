<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $welcomes = ['Welcome', 'Aloha!', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }

    public function contact()
    {
        return $this->app->view('contact');
    }

    # Week 11, Part 5
    # src/Controllers/AppController.php

    #user: root
    #pw: "" (empty string)
    public function practice()
    {
        # Set up all the variables we need to make a connection
        $host = $this->app->env('DB_HOST');
        $database = $this->app->env('DB_NAME');
        $username = $this->app->env('DB_USERNAME');
        $password = $this->app->env('DB_PASSWORD');
        $charset = $this->app->env('DB_CHARSET', 'utf8mb4');

        # DSN (Data Source Name) string
        # contains the information required to connect to the database
        $dsn = "mysql:host=$host;dbname=$database;charset=$charset";

        # Driver-specific connection options
        $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES => false,
    ];

        try {
            # Create a PDO instance representing a connection to a database
            $pdo = new \PDO($dsn, $username, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        dump("Connection succesful. You're awesome!");
    }

    public function practice2()
    {
        // dump($this->app->db()->all('products'));
        // dump($this->app->db()->findById('products', 6));
        // dump($this->app->db()->findByColumn('products', 'available', '<', 10));

        $data = [
            'name' => 'Driscoll’s Strawberries???',
            'description' => 'Driscoll’s Strawberries are consistently the best, sweetest, juiciest strawberries available. This size is the best selling, as it is both convenient for completing a cherished family recipes and for preparing a quick snack straight from the fridge.',
            'price' => 4.99,
            'available' => 10,
            'weight' => 1,
            'perishable' => true
        ];
        
        $this->app->db()->insert('products', $data);
    }
}
