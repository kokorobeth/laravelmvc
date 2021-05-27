<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UserController extends Controller
{
    public function create() {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:user',
            'email' => 'required',
            'password' => 'required',
        ]);
        // $query = DB::table('user')->insert([
        //     "name" => $request["name"],
        //     "email" => $request["email"],
        //     "password" => $request["password"]
        // ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password']
        ]);
        return redirect('/user');
    }

    public function index()
    {
        // $user = DB::table('user')->get();
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function show($id)
    {
        // $cast = DB::table('cast')->where('id', $id)->first();
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        // $user = DB::table('user')->where('id', $id)->first();
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update($id, Request $request) {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);
        // $query = DB::table('user')->where('id', $id)->update([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => $request['password']
        // ]);
        $user = User::where('id',  $id)->update([
            "name" => $request['name'],
            "email" => $request['email'],
            "password" => $request['password']
        ]);
        return redirect('/user');
    }

    public function destroy($id) {
        // $query = DB::table('user')->where('id', $id)->delete();
        $user = User::destroy($id);
        return redirect('/user');
    }
}
