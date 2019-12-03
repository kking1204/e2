@extends('templates.master')

@section('title')
All Products
@endsection

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<h1>Form</h1>

<form method='POST' id='new-product' action='/products/new'>
    <h3>Add A New Product</h3>
        <input type='hidden' name='id' value='{{ $product["id"] }}'>
    <div class='form-group'>
        <label for='name'>Name</label>
        <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
    </div>    
    <div class='form-group'>
        <label for='name'>Description</label>
        <textarea class="form-control" rows="5" name='description' id='description' value='{{ $app->old("description") }}'></textarea>
    </div>
    <div class='form-group'> 
        <label for='name'>Price</label>
        <input type='text' class="form-control" name='price' id='price' value='{{ $app->old("price") }}'>
    </div>
    <div class='form-group'>
        <label for='name'>Quantity available</label>
        <input type='text' class="form-control" name='available' id='available' value='{{ $app->old("available") }}'>
    </div> 
    <div class='form-group'>
        <label for='name'>Weight</label>
        <input type='text' class="form-control" name='weight' id='weight' value='{{ $app->old("weight") }}'>
    </div>
    <div class='form-group'>           
          <div class="checkbox">      
              {{-- if unchecked, it defaults to 0 --}}       
            <input type='hidden' name="perishable" id="perishable" value='0'>             
            <label for="perishable"><input type="checkbox" class="form-check-input" name="perishable" id="perishable" value='1'> Perishable?</label>
          </div>
        </div>
    <button type='submit' class='btn btn-primary'>Submit</button>
</form>

<br><br><br><br><br>

<h2>All Products</h2>

<div id="product-index">
    @foreach($products as $product)
    <a href="/product?id={{ $product['id'] }}">
        <div class="product">
            <div class="product-name"> {{ $product['name'] }} </div>
            <img class="product-thumb" src="/images/products/{{ $product['id'] }}.jpg">
        </div>
        @endforeach
</div>
@endsection