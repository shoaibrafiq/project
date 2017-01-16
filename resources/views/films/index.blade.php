@extends('layouts.app')


@section('content')

<h1>All films</h1>


@foreach ($films as $film)

<div>
<a href="{{ $film->path() }}">{{ $film->title }}</a>
</div>

@endforeach


@stop
