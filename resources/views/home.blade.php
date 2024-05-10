@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row row-cols-3">

            @foreach ($movies as $movie)
                <div class="col mb-3">
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
