<!-- /views/products/new.blade.php -->
@extends('templates.master')

@section('title')

@endsection

@section('content')

<h1>Form</h1>

<form method='POST' id='new-product' action='/products/'>
    <h3>Add A New Product</h3>
    <input type='hidden' name='id' value='{{ $product["id"] }}'>
    <div class='form-group'>
        <label for='name'>Name</label>
        <input type='text' class="form-control" name='name' id='name' value='{{ $app->old("name") }}'>
        <label for='name'>Description</label>
        <textarea class="form-control" rows="5" name='description' id='description' value='{{ $app->old("description") }}'></textarea>
        <label for='name'>Price</label>
        <input type='ext' class="form-control" name='price' id='price' value='{{ $app->old("price") }}'>
    <br><br>
        Available? 
        <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="available" id="available" value='{{ $app->old("available") }}'>Yes
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="available" id="available" value='{{ $app->old("available") }}'>No
            </label>
          </div>
    <br><br>
          <div class='form-group'>
            <label for='name'>Weight</label>
            <input type='text' class="form-control" name='weight' id='weight' value='{{ $app->old("weight") }}'>
          </div>
        
        Perishable? 
        <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="perishable" id="perishable" value='{{ $app->old("perishable") }}'>Yes
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="perishable" id="perishable" value='{{ $app->old("perishable") }}'>No
            </label>
          </div>
    </div>
    <button type='submit' class='btn btn-primary'>Submit</button>
</form>


@endsection

