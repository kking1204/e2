<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->products = new Products($this->app->path('database/products.json'));
    }

    public function index()
    {
        return $this->app->view('products.index', [
            'products' => $this->products->getAll()
            ]);
    }
    
    
    public function show()
    {
        $id = $this->app->param('id');
        
        if (is_null($id)) {
            return $this->app->redirect('/products');
        }
        
        $product = $this->products->getById($id);

        if (is_null($product)) {
            return $this->app->view('products.missing', ['id' => $id]);
        }
            
        $confirmationName = $this->app->old('confirmationName');
        
        return $this->app->view('products.show', [
            'product' => $product,
            'confirmationName' => $confirmationName
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'review' => 'required|minLength:200', # Note how multiple validation rules are separated by a |
        ]);
        

        $name = $this->app->input('name');
        $review = $this->app->input('review');
        $id = $this->app->input('id');
    
        # To do: persist the review to a database

        # return them to the product page
        return $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
        # alert the user that it was persisted
    }
}
