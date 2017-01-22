@extends('layout.main-app')
@section('title','jacket')

@section('content')
<br />
<br />
<br />
<br />

                  <div class="thumbnail" >
                      <img style=" height:400px;" src="{{url('images',$product->image)}}" class="img-responsive">
                      <div class="col-md-8">
                          <h3><label>{{$product->name}}</label></h3>
                          <h3><label>{{$product->price}}</label></h3>
                          <p>{{$product->description}}</p>
                      </div>
<div style="margin-left:100px;" class="col-xs-12 col-sm-6 col-md-3 pull-right">
                      <div class="caption">

                              <h3>Size: {{ $product->size }}
                              </h3>
                      </div>

                          <div class="row">

                            <a class="btn btn-sm btn-default btn-product" href="{{route('product.edit', $product->id)}}">Edit</a>
                           <br />
                           <br />

                             <form action="{{route('product.destroy',$product->id)}}"  method="POST">
                                     {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                     <input class="btn btn-sm btn-danger btn-product" type="submit" value="Delete">
                                   </form>
                          </div>

@stop
