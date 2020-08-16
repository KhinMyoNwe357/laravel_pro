@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Edit Receipe</h2>

	@if ($errors->any())
	<div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

	<form action="/receipe/{{ $receipe->id }}" method="POST">
		{{ method_field("PATCH") }}
		{{ csrf_field() }}
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Receipe Name</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<input type="text" name="name" value="{{ $receipe->name }}" class="form-control" placeholder="receipe name" >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Ingredients</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<input type="text" name="ingredients" value="{{ $receipe->ingredients }}" class="form-control" placeholder="ingredients" >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Category</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<select class="form-control" name="category">
					@foreach($category as $value)
					<option value="{{ $value->id }}" {{ $receipe->categories->id==$value->id ? "selected" : ''}}>{{ $value->name }}</option>
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