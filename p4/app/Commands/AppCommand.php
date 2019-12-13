<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        $this->app->db()->createTable('results', [
            'userMove' => 'varchar(10)', // rock or paper or scissors
            'computerMove' => 'varchar(10)',
            'winner' => 'varchar(10)',
        ]);
        dump('Migration complete! Check the database for your new tables.');
    }

    public function seed()
    {
        
    # Instantiate a new instance of the Faker\Factory class
    $faker = \Faker\Factory::create();

    # Use a loop to create 10 things
    for ($i = 0; $i < 10; $i++) {

    # Set up a bs thing
    $bs = [
        'computerMove' => $faker->randomElement($array = array ('rock','paper','scissors')),
    ];

    # Insert the bs thing
    $this->app->db()->insert('results', $bs);
}
        dump('Seeding complete! Check the tables for your fake data.');
    }

    public function boom()
    {
        $this->migrate();
        $this->seed();
        dump("Boom! Now get to work.");
    }
}



 