<!-- /views/products/show.blade.php -->
@extends('templates.master')

@section('title')

@endsection

@section('content')

<h1>Form</h1>

<form method='POST' id='new-product' action='/products/new'>
    <h3>Add A New Product</h3>
    <input type='hidden' name='id' value='{{ $product["id"] }}'>
    <div class='form-group'>
        <label for='name'>Name</label>
        <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
    </div>



    <button type='submit' class='btn btn-primary'>Submit Review</button>
</form>


@endsection

