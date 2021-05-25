<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Film;

class FilmController extends Controller
{
    public function create()
    {   
        $genres = genre::all();
        return view('film.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:film',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|mimes::jpeg,jpg,png',
            'genre_id' => 'required'
        ]);

        $gambar = $request->poster;
        $name_img = time(). ' - '. $gambar->getClientOriginalName();

        $film = Film::create([
            'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun' => $request->tahun,
            'poster' => $request->$name_img,
            'genre_id' => $request->genre_id
        ]);

        $gambar->move('/img', $name_img);
        return redirect('/film');
    }

    public function index()
    {
        // $genres = Genre::all();
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
