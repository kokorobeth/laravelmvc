@extends('layout.master')

@section('title2')
    List Film
@endsection

@section('content')
    <a href="{{route('film.create')}}" class="btn btn-primary my-4">Tambah List Film</a>
    <div class="row">
        @foreach ($film as $item)
        <div class="col-4">
            <div class="card">
                <img src="{{asset('uploads/film/'.$item->poster)}}" class="card-img-top" height="400px" width="100px">
                <div class="card-body">
                  <h3 class="card-title text-bold mb-3">{{$item->judul}} ({{$item->tahun}})</h3>
                  <span class="badge badge-primary">{{$item->genre->nama}}</span><br>
                  <p class="card-text">{{Str::limit($item->ringkasan, 100)}}</p>
                  <form action="/film/{{$item->id}}" method="POST" enctype="multipart/form-data">
                    <a href="/film/{{$item->id}}" class="btn btn-info">Show</a>
                    <a href="/film/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                </form>
                </div>
              </div>
        </div>
        @endforeach
    </div>
    
@endsection