<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Profil;
use Auth;

class ProfilController extends Controller
{
    public function create()
    {
        return view('profil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'umur' => 'required',
            'bio' => 'required',
            'alamat' => 'required'
        ]);
        // $query = DB::table('profil')->insert([
        //     "umur" => $request["umur"],
        //     "bio" => $request["bio"],
        //     "alamat" => $request["alamat"],
        //     "user_id" => $request["user_id"]
        // ]);
        Profil::create([
            'umur' => $request->umur,
            'bio' => $request->bio,
            'alamat' => $request->alamat,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/profil');
    }

    public function index()
    {
        // $profil = DB::table('profil')->get();
        $profil = Profil::where('user_id', Auth::user()->id)->first();
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
        
    }

    public function update($id, Request $request) {
        $this->validate($request, [
            'umur' => 'required',
            'bio' => 'required',
            'alamat' => 'required'
        ]);
        $profil_data = [
            'umur' => $request->umur,
            'bio' => $request->bio,
            'alamat' => $request->alamat
        ];

        Profil::whereId($id)->update($profil_data);

        return redirect('/profil');
    }

    public function destroy($id) {
        // $query = DB::table('profil')->where('id', $id)->delete();
        $profil = Profil::destroy($id);
        return redirect('/profil');
    }
}
