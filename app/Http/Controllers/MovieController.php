<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use App\Models\Genre;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        $directors = Director::all();
        $genres = Genre::all();
        return view('movies.create', compact('directors', 'genres'));
    }

    public function store(StoreMovieRequest $request)
    {
        $movie = Movie::create($request->validated());
        return redirect()->route('movies.index');
    }

    public function edit(Movie $movie)
    {
        $directors = Director::all();
        $genres = Genre::all();
        return view('movies.edit', compact('movie', 'directors', 'genres'));
    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        return redirect()->route('movies.show', $movie);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
