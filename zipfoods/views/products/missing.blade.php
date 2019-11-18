<!-- /views/products/missing.blade.php -->
@extends('templates.master')

@section('title')
Uh oh!
@endsection

@section('content')
<div id='product-show'>
    <h2>Product {{ $id }} not found</h2>
    <p class='product-description'>
        Uh-oh, it looks like we can't find what you're looking for.
    </p>
</div>

<a href='/products'>&larr; Check out our other products</a>
@endsection