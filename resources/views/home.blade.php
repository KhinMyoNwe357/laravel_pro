@extends('layout')

@section('content')
<div class="container">
	<h2>Home Page</h2>
	<div>
		<a href="/receipe/create"><button class="btn btn-success">Create</button></a>
	</div>
	@foreach($data as $value)
	<a href="/receipe/{{ $value->id }}"> <li>{{ $value->name }}</li></a>
	<li>{{ $value->ingredients }}</li>
	<li>{{ $value->category }}</li>
	<hr>
	@endforeach
</div>
@endsection