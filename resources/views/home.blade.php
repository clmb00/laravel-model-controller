@extends('layout.layout')


@section('title')
    Home
@endsection

@section('content')
    <h1 class="mx-5 ps-5 mb-4 fw-semibold">Movies</h1>
    <div class="container">

        <div class="row row-cols-3 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card overflow-hidden rounded-4">
                        <div class="card-body bg-dark text-white">
                          <h5 class="card-title fw-bold">{{ $movie->title }}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                          <p class="card-text fw-bold">{{ $movie->vote }}</p>
                          <a href="#" class="card-link text-info">About</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
