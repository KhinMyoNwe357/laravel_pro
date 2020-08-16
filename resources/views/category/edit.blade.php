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

	<form action="/category/{{ $category->id }}" method="POST">
		{{ method_field("PATCH") }}
		{{ csrf_field() }}
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Category Name</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="category name" >
			</div>
		</div>
		<div class="form-group row">
			<label class="col-12 col-md-2 col-lg-2">Description</label>
			<div class=" col-12 col-md-4 col-lg-4">
				<input type="text" name="description" value="{{ $category->description }}" class="form-control" placeholder="description" >
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