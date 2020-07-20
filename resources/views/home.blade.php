@extends('layout')

@section('title')
 Home Page
@endsection
@section('content')
@foreach($data as $value)
<li>{{ $value->name }}</li>
<li>{{ $value->ingredients }}</li>
<li>{{ $value->category }}</li>
@endforeach
@endsection