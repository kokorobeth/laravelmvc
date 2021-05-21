@extends('layout.master')

@section('title')
    Tambah Cast
@endsection

@section('content')
<div>
    <h2>Tambah Data</h2>
        <form action="/cast/{{$cast->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" value="{{$cast->nama}}" name="nama" id="nama" placeholder="Masukkan Nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="umur">Umur</label>
                <input type="text" class="form-control" value="{{$cast->umur}}" name="umur" id="umur" placeholder="Masukkan umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="bio">Bio</label>
                <input type="text" class="form-control" value="{{$cast->bio}}" name="bio" id="bio" placeholder="Masukkan bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
@endsection
