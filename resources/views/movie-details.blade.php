@extends('layout.main')

@section('content')
    <div class="container d-flex">
        <div>
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        </div>
        <div class="ps-5">
            <h3 class="fw-bold">Titolo: {{ $movie->title }}</h3>
            <h5><strong>Titolo originale:</strong> {{ $movie->original_title }}</h5>
            <p><strong>Nazionalità:</strong> {{ $movie->nationality }}</p>
            <p><strong>Data d'uscita:</strong> {{ $movie->date }}</p>
            <p><strong>Voto:</strong> {{ $movie->vote }}</p>
            <p><strong>Descrizione:</strong> {{ $movie->plot }}</p>
        </div>
    </div>
@endsection
