@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Receipe Page</h2>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form action="/category" method="POST">
		{{ csrf_field() }}
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Category Name</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<input type="text" name="name" class="form-control" placeholder="category name" value="{{ old('name') }}" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Description</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<input type="text" name="description" class="form-control" placeholder="description" value="{{ old('description') }}" required>
			</div>
		</div>
		
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2"></label>
			<div class=" col-12 col-md-4 col-lg-4">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>
@endsection