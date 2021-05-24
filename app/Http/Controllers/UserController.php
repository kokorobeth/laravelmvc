<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function create() {
        return view('users.create');
    }

    public function index() {
        $users = DB::table('users')->get();
        return view('users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required',
        ]);
        $query = DB::table('users')->insert([
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => $request["password"]
        ]);
        return redirect('/users');
    }

    public function show($id) {
        $users = DB::table('users')->where('id', $id)->first();
        return view('users.show', compact('users'));
    }
}
