<?php
namespace App\Controllers;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {
        parent::__construct($app);
    }

    public function index()
    {
        return $this->app->view('products.index', [
            'products' => $this->app->db()->all('products')
            ]);
    }
    
    
    public function show()
    {
        $id = $this->app->param('id');
        
        if (is_null($id)) {
            return $this->app->redirect('/products');
        }
        
        # Load the product details
        //$product = $this->products->getById($id);
        $product = $this->app->db()->findById('products', $id);


        if (is_null($product)) {
            return $this->app->view('products.missing', ['id' => $id]);
        }
        
        # Load the review details
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);

        $confirmationName = $this->app->old('confirmationName');
        
        # display stuff on screen
        return $this->app->view('products.show', [
            'product' => $product,
            'reviews' => $reviews,
            'confirmationName' => $confirmationName
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'content' => 'required|minLength:200', # Note how multiple validation rules are separated by a |
        ]);
        
        # extract data from form submission
        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');
    
        # insert into the database
        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
        ];

        $this->app->db()->insert('reviews', $data);

        # return them to the product page with confirmationName used for success messaging
        return $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
        # alert the user that it was persisted
    }
}
