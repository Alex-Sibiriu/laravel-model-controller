@extends('layout.main')

@section('content')
    <div class="container">
        <h2 class="text-danger text-center pb-3 fs-1 fw-bold">{{ $title }}</h2>
        <div class="row row-cols-3">

            @foreach ($movies as $movie)
                <div class="col mb-4">
                    <div class="card bg-transparent border-0 h-100 text-center">
                        <a href="{{ route('movie-details', ['id' => $movie->id]) }}">
                            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
