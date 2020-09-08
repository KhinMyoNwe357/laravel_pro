@extends('layout')

@section('content')
<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Receipe Blog</h1>
      <p class="lead text-muted">Read about receipes details</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row" style="display: flex; justify-content: center;">
        <div class="col-md-8">
          <div class="card mb-8 box-shadow">
            <div class="card-body">
              <h3>{{ $receipe->name }}</h3>
              <p class="card-text">{{ $receipe->ingredients }}</p>
              <p>{{ $receipe->categories->name }}</p>
              <!-- <p>{{ $receipe['created_at']->format('Y/m/d') }}</p> -->
              <p>{{ date('Y/m/d', strtotime($receipe->created_at)) }}</p>
              <div class="img_container">
                <img src="{{ '/images/'.$receipe->image }}">
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/"><button type="button" class="btn btn-sm btn-outline-secondary">Back</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</main>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
  </div>
</footer>
@endsection