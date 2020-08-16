@extends('layouts.app')

@section('content')
<div class="container">
	<h2> {{ $category->name }} </h2>
	<li>Description - {{ $category->description }} </li>

	<a href="/category/{{$category->id}}/edit"><button class="btn btn-success">Edit</button></a>

	<form action="/category/{{ $category->id }}" method="POST">
		{{ method_field("DELETE") }}
		{{ csrf_field() }}
		<button type="submit" class="btn btn-primary">Delete</button>
	</form>
</div>
@endsection