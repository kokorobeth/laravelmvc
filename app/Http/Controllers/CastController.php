<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cast;

class CastController extends Controller
{
    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:cast',
            'umur' => 'required',
            'bio' => 'required',
        ]);
        // $query = DB::table('cast')->insert([
        //     "nama" => $request["nama"],
        //     "umur" => $request["umur"],
        //     "bio" => $request["bio"]
        // ]);
        $cast = Cast::create([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' => $request['bio']
        ]);
        return redirect('/cast');
    }

    public function index()
    {
        // $cast = DB::table('cast')->get();
        $cast = Cast::all();
        return view('cast.index', compact('cast'));
    }

    public function show($id)
    {
        // $cast = DB::table('cast')->where('id', $id)->first();
        $cast = Cast::find($id);
        return view('cast.show', compact('cast'));
    }

    public function edit($id)
    {
        // $cast = DB::table('cast')->where('id', $id)->first();
        $cast = Cast::find($id);
        return view('cast.edit', compact('cast'));
    }

    public function update($id, Request $request) {
        // $request->validate([
        //     'nama' => 'required',
        //     'umur' => 'required',
        //     'bio' => 'required'
        // ]);
        // $query = DB::table('cast')->where('id', $id)->update([
        //     'nama' => $request['nama'],
        //     'umur' => $request['umur'],
        //     'bio' => $request['bio']
        // ]);
        $cast = Cast::where('id',  $id)->update([
            "nama" => $request['nama'],
            "umur" => $request['umur'],
            "bio" => $request['bio']
        ]);
        return redirect('/cast');
    }

    public function destroy($id) {
        // $query = DB::table('cast')->where('id', $id)->delete();
        $cast = Cast::destroy($id);
        return redirect('/cast');
    }
}
