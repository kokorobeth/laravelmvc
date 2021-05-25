<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Film;
use File;

class FilmController extends Controller
{
    public function create()
    {   
        $genres = Genre::all();
        return view('film.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:film',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|mimes:jpeg,jpg,png',
            'genre_id' => 'required'
        ]);

        $gambar = $request->poster;
        $name_img = time(). ' - '. $gambar->getClientOriginalName();

        $film = Film::create([
            'judul' => $request->judul,
            'ringkasan' => $request->ringkasan,
            'tahun' => $request->tahun,
            'genre_id' => $request->genre_id,
            'poster' => $name_img
        ]);

        $gambar->move('img', $name_img);
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
        $genre = Genre::all();
        $film = Film::findorfail($id);
        return view('film.edit', compact('film', 'genre'));
    }

    public function update(Request $request, $id) {
        // $this->validate($request, [
        //     'judul' => 'required',
        //     'tahun' => 'required',
        //     'genre_id' => 'required',
        //     'ringkasan' => 'required',
        //     'poster' => 'required|mimes:jpeg,png,jpg'
        // ]);
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|mimes:jpeg,jpg,png',
            'genre_id' => 'required'
        ]);

        $film = Film::findorfail($id);

        if($request->has('poster')) {
            $path = "/film";
            File::delete($path . $film->poster);
            $gambar = $request->poster;
            $new_gambar = time() . ' - ' . $gambar->getClientOriginalName();
            $gambar->move('img', $new_gambar);
            $film_data = [
                'judul' => $request->judul,
                'ringkasan' => $request->ringkasan,
                'tahun' => $request->tahun,
                'genre_id' => $request->genre_id,
                'poster' => $new_gambar
            ];
        } else {
            $film_data = [
                'judul' => $request->judul,
                'ringkasan' => $request->ringkasan,
                'tahun' => $request->tahun,
                'genre_id' => $request->genre_id
            ];
        }
        $film->update($film_data);
        return redirect('/film');
    }

    public function destroy($id) {
        $film = Film::findorfail($id);
        $film->delete();

        $path = "img/";
        File::delete($path . $film->poster);
        return redirect()->route('film.index')->with('Success', 'Poster Berhasil dihapus');
    }
}
