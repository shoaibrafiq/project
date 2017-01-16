@extends('layouts.app')


@section('content')

  <div class="row">

<div class="col-md-6 col-md-offset-3">
<h1>{{ $film->title }} </h1>


<ul class="list-group">

@foreach ($film->reviews as $review)

  <li class="list-group-item">
    {{ $review->body }}
<a href="#" class="pull-right"> {{ $review->user->name }}</a>

  </li>

@endforeach


</ul>

<hr>

<h3>Add a Review</h3>

<form method="POST" action="/films/{{ $film->id }}/reviews">

  {{ csrf_field() }}

<div class="form-group">
  <textarea name="body" class="form-control">{{ old('body') }}</textarea>

</div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Add Review</button>

</div>

</form>
@if (count($errors))

@foreach ($errors->all() as $error)

  <li>
    {{ $error }}
  </li>

@endforeach


@endif

</div>
  </div>

@stop
