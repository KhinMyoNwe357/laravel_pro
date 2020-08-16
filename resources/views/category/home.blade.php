@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			
			<div class="container" style="margin-top: 20px;">
				<h2>Home Page</h2>
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