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

      <div class="row">
        @foreach($receipe as $value)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-body">
              <h3>{{ $value->name }}</h3>
              <p>{{ $value->categories->name }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="details/{{ $value->id }}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $receipe->links() }}
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
