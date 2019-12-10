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
            'name' => 'varchar(255)',
            'content' => 'varchar(255)',
        ]);
        dump('Migration complete; check the database for your new table.');
    }

    public function seed()
    {
        
    # Instantiate a new instance of the Faker\Factory class
    $faker = \Faker\Factory::create();

    # Use a loop to create 10 things
    for ($i = 0; $i < 10; $i++) {

    # Set up a thing
    $bs = [
        'name' => $faker->name,
        'content' => $faker->sentences(3, true),
    ];

    # Insert the thing
    $this->app->db()->insert('results', $bs);
}
        dump('Seeds complete!');
    }

    public function boom()
    {
        $this->migrate();
        $this->seed();
        dump("Boom! Now get to work.");
    }
}



 