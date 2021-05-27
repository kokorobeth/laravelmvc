<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Profil;

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
}
