<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $director = Director::create($request->all());
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

    public function update(Request $request, Director $director)
    {
        $director->update($request->all());
        return redirect()->route('directors.show', $director);
    }

    public function destroy(Director $director)
    {
        $director->delete();
        return redirect()->route('directors.index');
    }
}
