@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			
			<div class="container" style="margin-top: 20px;">
				<h2>Home Page</h2>
				@if(session('message'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<p>{{ session('message') }}</p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				@endif
				@if(session('deleted'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<p>{{ session('deleted') }}</p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				@endif
				<div>
					<a href="/category/create"><button class="btn btn-success">Create</button></a>
				</div>
				@foreach($category as $value)
				<a href="/category/{{ $value->id }}"> <li>{{ $value->name }}</li></a>
				<hr>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection