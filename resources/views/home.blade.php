@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row row-cols-3">

            @foreach ($movies as $movie)
                <div class="col">
                    <h1>{{ $movie->title }}</h1>
                </div>
            @endforeach

        </div>
    </div>
@endsection
