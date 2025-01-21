<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDirectorRequest;
use App\Http\Requests\UpdateDirectorRequest;

class DirectorController extends Controller
{
    public function index()
    {
        $directors = Director::all();
        return view('directors.index', compact('directors'));
    }

    public function create()
    {
        return view('directors.create');
    }

    public function store(StoreDirectorRequest $request)
    {
        $director = Director::create($request->validated());
        return redirect()->route('directors.index');
    }

    public function show(Director $director)
    {
        return view('directors.show', compact('director'));
    }

    public function edit(Director $director)
    {
        return view('directors.edit', compact('director'));
    }

    public function update(UpdateDirectorRequest $request, Director $director)
    {
        $director->update($request->validated());
        return redirect()->route('directors.show', $director);
    }

    public function destroy(Director $director)
    {
        $director->delete();
        return redirect()->route('directors.index');
    }
}
