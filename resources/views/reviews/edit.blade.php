@extends('layouts.app')

@section('content')

<h1>Edit the Review</h1>

<form method="POST" action="/reviews/{{ $review->id }}">

{{ method_field('PATCH') }}
  {{ csrf_field() }}

<div class="form-group">
  <textarea name="body" class="form-control">{{ $review->body }} </textarea>
  
</div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Update Review</button>

</div>

</form>



@stop
