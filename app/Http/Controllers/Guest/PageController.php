<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $title = 'Tutti i Film';

        return view('home', compact('movies', 'title'));
    }

    public function topRated()
    {
        $movies = Movie::where('vote', '>', 9)->get();
        $title = 'I Migliori Film';

        return view('home', compact('movies', 'title'));
    }

    public function movieDetails($id)
    {
        $movie = Movie::find($id);
        if (!isset($movie)) {
            abort(404);
        }

        return view('movie-details', compact('movie'));
    }
}
