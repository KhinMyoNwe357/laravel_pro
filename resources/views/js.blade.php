@extends('layout')

@section('content')
<h2>JS Page</h2>
@endsection
@section('lessonSection')
@foreach($data as $value)
	<li>{{$value}}</li>
@endforeach
@endsection