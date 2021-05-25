@extends('layout.master')

@section('title')
    Edit Film Ke - {{$film->id}}
@endsection

@section('content')
<div>
    <h2>Tambah Data</h2>
        <form action="/film/{{$film->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" value="{{$film->judul}}" name="judul" id="title">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="ringkasan">Ringkasan</label>
                <input type="text" class="form-control" value="{{$film->ringkasan}}" name="ringkasan" id="title">
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" value="{{$film->tahun}}" name="tahun" id="title">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genre_id">Genre</label>
                <select name="genre_id" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($genre as $value)
                        @if ($value->id == $film->genre_id)
                        <option value="{{$value->id}}" selected>{{$value->nama}}</option>
                        @else 
                        <option value="{{$value->id}}">{{$value->nama}}</option>
                        @endif
                    @endforeach
                </select>
                @error('genre_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="poster">Poster</label>
                    <input type="file" class="form-control" name="poster" id="poster">
                    @error('poster')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            <button type="submit" class="btn btn-primary my-5">Edit Film</button>
        </form>
</div>
@endsection
