@extends('layout.master')

@section('title')
    Tambah Genre
@endsection

@section('content')
<div>
    <h2>Tambah Data</h2>
        <form action="/genre/{{$genre->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" value="{{$genre->nama}}" name="nama" id="title" placeholder="Masukkan Title">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
@endsection
