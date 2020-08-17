@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif

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
				<div>
					<a href="/receipe/create"><button class="btn btn-success">Create</button></a>
				</div>
				@foreach($data as $value)
				<a href="/receipe/{{ $value->id }}"> <li>{{ $value->name }}</li></a>
				<hr>
				@endforeach
			</div>
			{{ $data->links() }}
		</div>
	</div>
</div>
@endsection