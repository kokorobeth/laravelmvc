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
        return redirect('/posts')->with('Success', 'Post berhasil disimpan');
    }

    public function index()
    {
        // $post = DB::table('post')->get();
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'body' => 'required',
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->update();
        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }
}
