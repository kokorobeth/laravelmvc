<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'body' => 'required'
        ]);
        // $query = DB::table('post')->insert([
        //     "title" => $request["title"],
        //     "body" => $request["body"]
        // ]);
        // $post = new Post;
        // $post->title = $request["title"];
        // $post->body = $request["body"];
        // $post->save();

        $post = Post::create([
            'title' => $request["title"],
            'body' => $request["body"]
        ]);
        return redirect('/post')->with('Success', 'Post berhasil disimpan');
    }

    public function index()
    {
        // $post = DB::table('post')->get();
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    public function show($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);
        $query = DB::table('post')->where('id', $id)->update([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' => $request['bio']
        ]);
        return redirect('/post');
    }

    public function destroy($id) {
        $query = DB::table('post')->where('id', $id)->delete();
        return redirect('/post');
    }
}
