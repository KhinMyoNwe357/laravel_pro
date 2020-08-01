@extends('layout')

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
	<form action="/receipe" method="POST">
		{{ csrf_field() }}
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Receipe Name</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<input type="text" name="name" class="form-control" placeholder="receipe name" value="{{ old('name') }}" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Ingredients</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<input type="text" name="ingredients" class="form-control" placeholder="ingredients" value="{{ old('ingredients') }}" required>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Category</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<select class="form-control" name="category">
					@foreach($category as $value)
					<option value="{{ $value->id }}">{{ $value->name }}</option>
					@endforeach
				</select>
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