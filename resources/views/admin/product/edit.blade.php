@extends('admin.layout.admin')

@section('content')



  <div style="margin-left:250px;  moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;"class="col-md-12 col-md-offset-2 row">
<h3>Edit Product</h3>
{!! Form::model($product, [
    'method' => 'PATCH',
    'route' => ['product.update', $product->id]
]) !!}

<div class="form-group">

  {{ Form::label('name', 'Name') }}
{{ Form::text('name', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">

  {{ Form::label('price', 'Price') }}
  {{ Form::text('price', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">

  {{ Form::label('description', 'Description') }}
  {{ Form::text('description', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">

  {{ Form::label('size', 'Size') }}
  {{ Form::select('size', ['small' => 'Small', 'medium' =>'Medium', 'large' => 'Large'], null, array('class' => 'form-control')) }}
</div>

<div class="form-group">

  {{ Form::label('category_id', 'Categories') }}
  {{ Form::select('category_id', $categories, null, array('class' => 'form-control', 'placeholder' => 'Select')) }}
</div>
<div class="form-group">

  {{ Form::label('image', 'Image') }}
  {{ Form::file('image',array('class' => 'form-control')) }}
</div>

{{ Form::submit('Create', array('class' => 'btn btn-default'))}}
{!! Form::close() !!}

  </div>

@endsection
