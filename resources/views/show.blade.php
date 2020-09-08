@extends('layouts.app')

@section('content')
<div class="container">
	<h2> {{ $receipe->name }} </h2>
	<li>Ingredients - {{ $receipe->ingredients }} </li>
	<li>Category - {{ $receipe->categories->name }} </li>
	<div class="img_container">
	    <img src="{{ '/images/'.$receipe->image }}">
  	</div>
	<a href="/receipe/{{$receipe->id}}/edit"><button class="btn btn-success">Edit</button></a>

	<form action="/receipe/{{ $receipe->id }}" method="POST">
		{{ method_field("DELETE") }}
		{{ csrf_field() }}
		<button type="submit" class="btn btn-primary">Delete</button>
	</form>
</div>
@endsection