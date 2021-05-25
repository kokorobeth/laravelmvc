<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Genre;

class GenreController extends Controller
{
    public function create()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:genre'
        ]);
        // $query = DB::table('genre')->insert([
        //     "nama" => $request["nama"]
        // ]);
        $genre = Genre::create([
            "nama" => $request['nama']
        ]);
        
        return redirect('/genre');
    }
    
  public function index()
  {
    //   $genre = DB::table('genre')->get();
      $genre = Genre::all();
      return view('genre.index', compact('genre'));
  }

  public function show($id)
    {
        // $genre = DB::table('genre')->where('id', $id)->first();
        $genre = Genre::find($id);
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        // $genre = DB::table('genre')->where('id', $id)->first();
        $genre = Genre::find($id);
        return view('genre.edit', compact('genre'));
    }

    public function update($id, Request $request) {
        // $request->validate([
        //     'nama' => 'required|unique:genre'
        // ]);
        // $query = DB::table('genre')->where('id', $id)->update([
        //     'nama' => $request['nama'],
        // ]);

        $genre = Genre::where('id', $id)->update([
            "nama" => $request['nama']
        ]);
        return redirect('/genre');
    }

    public function destroy($id) {
        // $query = DB::table('genre')->where('id', $id)->delete();
        $genre = Genre::destroy($id);
        return redirect('/genre');
    }
}
