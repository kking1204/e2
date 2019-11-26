<?php

namespace App\Commands;

class AppCommand extends Command
{
    /**
     *
     */
    public function test()
    {
        dump("It works! You invoked your first command. You're so rad.");
    }

    public function rest()
    {
        # ...does some other things...then sends this message
        dump("You invoked another command. Take a rest.");
    }

    public function boom() # this function contains the migrate + seed functions = boom
    {
        $this->migrate();
        $this->seed();
        dump("Boom! Now get to work.");
    }
    public function seed() # this function contains the two seeding functions I created
    {
        $this->seedProducts();
        $this->seedReviews();
    }

    public function migrate()
    {
        $this->app->db()->createTable('products', [
            'name' => 'varchar(255)',
            'description' => 'text',
            'price' => 'decimal(10,2)',
            'available' => 'int',
            'weight' => 'decimal(10,2)',
            'perishable' => 'tinyint(1)'
        ]);
        
        $this->app->db()->createTable('reviews', [
            'name' => 'varchar(255)',
            'content' => 'text',
            'product_id' => 'int',
        ]);
        
        dump('Migration complete; check the database for your new tables.');
    }

    public function seedProducts()
    {
        $products = new \App\Products($this->app->path('database/products.json'));
    
        foreach ($products->getAll() as $product) {
    
            # We're not tracking categories in our table
            unset($product['categories']);
    
            # Don't need ID - that will get automatically added
            unset($product['id']);
    
            # Convert perishable boolean to int
            $product['perishable'] = $product['perishable'] ? 1 : 0;
    
            # Insert product
            $this->app->db()->insert('products', $product);
        }
    
        # Display all products to confirm results
        # notify
        dump("Seeding complete; check the tables for your new products.");
    }

    public function seedReviews()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 reviews
        for ($i = 0; $i < 10; $i++) {

        # Set up a review
            $review = [
                'name' => $faker->name,
                'content' => $faker->sentences(rand(1, 4), true),
                'product_id' => ($i % 2 == 0) ? 1 : 2, # Alternate between products 1 and 2
    ];

            # Insert the review
            $this->app->db()->insert('reviews', $review);
        }
 
        # notify
        dump($i . " reviews seeded successfully.");
    }
}
