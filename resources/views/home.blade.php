@extends('layouts.app')
@section('titolo', 'Lista dei film')
@section('content')

<h1 class="text-center pt-4 pb-5 ">Home Movie</h1>

 <div class="container">
  <div class="row">
      <div class="row d-flex justify-content-center">
          @foreach ($movie as $movie )
      <div class="card bg-transparent col-lg-3 col-md-6 border-0 mb-5">
        <img class="card-img-top rounded-3  my-card " src="{{ $movie->image }}" alt="" />
        <div class="mt-3 my-title text-uppercase text-center">{{ $movie['title'] }}</div>
      </div>
    @endforeach
      </div>
  </div>
</div>
</div>
@endsection




