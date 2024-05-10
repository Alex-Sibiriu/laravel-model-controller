@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row row-cols-3">

            @foreach ($movies as $movie)
                <div class="col mb-3">
                    <div class="card h-100 text-center">
                        <h3>Titolo: {{ $movie->title }}</h3>
                        <h5>Titolo originale: {{ $movie->original_title }}</h5>
                        <h5>Nazionalità: {{ $movie->nationality }}</h5>
                        <h5>Data d'uscita: {{ $movie->date }}</h5>
                        <h5>Voto: {{ $movie->vote }}</h5>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
