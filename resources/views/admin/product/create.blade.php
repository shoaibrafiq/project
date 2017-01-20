@extends('admin.layout.admin')

@section('content')



  <div style="margin-left:250px;  moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;"class="col-md-12 col-md-offset-2 row">
<h3>Add Product</h3>

<form method="POST" action="{{ route('product.store') }}">

  {{ csrf_field() }}

<div class="form-group">
  <span>Name</span>
  <input name="name" class="form-control"></input>

</div>
<div class="form-group">
  <span>Price</span>
  <input name="price" class="form-control"></input>

</div>

<div class="form-group">
  <span>Description</span>
  <textarea name="Description" class="form-control"></textarea>

</div>

<div class="form-group">
  <span>Size</span>
  <select>
 <option value="small">Small</option>
 <option value="medium">Medium</option>
 <option value="large">Large</option>
</select>

</div>
<div class="form-group">
  <span>Category</span>
  <select>

@foreach ($categories as $category)

  <option value="{{ $category->id }}">{{ $category->name }}</option>
@endforeach

</select>

</div>

<div class="form-group">
  <span>Image</span>
  <input type="file" name="image" accept="image/*">

</div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Add Product</button>

</div>

</form>

@endsection
