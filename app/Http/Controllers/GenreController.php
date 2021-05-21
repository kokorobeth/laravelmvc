<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $query = DB::table('genre')->insert([
            "nama" => $request["nama"]
        ]);
        return redirect('/genre');
    }
    
  public function index()
  {
      $genre = DB::table('genre')->get();
      return view('genre.index', compact('genre'));
  }

  public function show($id)
    {
        $genre = DB::table('genre')->where('id', $id)->first();
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        $genre = DB::table('genre')->where('id', $id)->first();
        return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
        ]);
        $query = DB::table('genre')->where('id', $id)->update([
            'nama' => $request['nama'],
        ]);
        return redirect('/genre');
    }

    public function destroy($id) {
        $query = DB::table('genre')->where('id', $id)->delete();
        return redirect('/genre');
    }
}
