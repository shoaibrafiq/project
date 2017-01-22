@extends('admin.layout.admin')

@section('content')



  <div style="margin-left:250px;  moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;"class="col-md-12 col-md-offset-2 row">
<h3>Products List</h3>
<br />

  @forelse ($products as $product)

  <h4>Product ID: {{$product->id}}</h4>
  <h4>Product Name: {{$product->name}}</h4>
 <a class="btn btn-sm btn-success" href="{{route('product.show', $product->id)}}">View</a>
 <a class="btn btn-sm btn-default" href="{{route('product.edit', $product->id)}}">Edit</a>
<br />
<br />

  <form action="{{route('product.destroy',$product->id)}}"  method="POST">
          {{csrf_field()}}
           {{method_field('DELETE')}}
          <input class="btn btn-sm btn-danger" type="submit" value="Delete">
        </form>



@empty

  <h3>No Products to show</h3>
@endforelse


  </div>

@endsection

//using forelse instead of foreach so if there is no product it will show empty rather than error
