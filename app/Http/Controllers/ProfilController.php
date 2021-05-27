<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Profil;
use App\User;

class ProfilController extends Controller
{
    public function create()
    {
        return view('profil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'umur' => 'required|unique:profil',
            'bio' => 'required',
            'alamat' => 'required'
        ]);
        $query = DB::table('profil')->insert([
            "umur" => $request["umur"],
            "bio" => $request["bio"],
            "alamat" => $request["alamat"],
            "user_id" => $request["user_id"]
        ]);
        return redirect('/profil');
    }

    public function index()
    {
        // $profil = DB::table('profil')->get();
        $profil = Profil::all();
        return view('profil.index', compact('profil'));
    }

    public function show($id)
    {
        // $profil = DB::table('profil')->where('id', $id)->first();
        $profil = Profil::find($id);
        return view('profil.show', compact('profil'));
    }

    public function edit($id)
    {
        $profil = Profil::find($id);
        return view('profil.edit', compact('profil'));
    }

    public function update($id, Request $request) {
        $profil = Profil::where('id',  $id)->update([
            "umur" => $request['umur'],
            "bio" => $request['bio'],
            "alamat" => $request['alamat']
        ]);
        return redirect('/profil');
    }

    public function destroy($id) {
        // $query = DB::table('profil')->where('id', $id)->delete();
        $profil = Profil::destroy($id);
        return redirect('/profil');
    }
}
