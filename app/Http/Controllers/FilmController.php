<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function create()
    {
        return view('film.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:film',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required',
            'genre_id' => 'required'
        ]);
        $film = Film::create([
            'judul' => $request['judul'],
            'ringkasan' => $request['ringkasan'],
            'tahun' => $request['tahun'],
            'poster' => $request['poster'],
            'genre_id' => $request['genre_id']
        ]);
        return redirect('/film');
    }

    public function index()
    {
        $film = Film::all();
        return view('film.index', compact('film'));
    }

    public function show($id)
    {
        $film = Film::find($id);
        return view('film.show', compact('film'));
    }

    public function edit($id)
    {
        $film = Film::find($id);
        return view('film.edit', compact('film'));
    }

    public function update($id, Request $request) {
        $film = Film::where('id',  $id)->update([
            "judul" => $request['judul'],
            "ringkasan" => $request['ringkasan'],
            "tahun" => $request['tahun'],
            "poster" => $request['poster'],
            "genre_id" => $request['genre_id']
        ]);
        return redirect('/film');
    }

    public function destroy($id) {
        $film = Film::destroy($id);
        return redirect('/film');
    }
}
