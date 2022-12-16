@extends('layouts.app')
@section('titolo', 'Lista dei film')
@section('content')

<h1 class="text-center pt-3 ">Home Movie</h1>

   <div class="container-fluid  mt-5">
      <div class="row ms-5 me-5">
      @foreach ($movie as $movie )
      <div class="my-card card  bg-transparent col-3 border-0 mb-5">
        <img class="card-img-top rounded-3 " src="{{ $movie->image }}" alt="" />
        <div class="mt-2 my-title text-uppercase text-center">{{ $movie['title'] }}</div>
      </div>
    @endforeach
    </div>
  </div>
@endsection



