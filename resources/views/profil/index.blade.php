@extends('layout.master')

@section('title2')
    User ID {{ Auth::user()->name }}
@endsection

@section('content')
    @if ($profil != null)
    <p>Email : {{$profil->user->email}}</p>
    <p>Nama : {{$profil->user->name}}</p>
    <form action="/profil/{{$profil->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" value="{{$profil->umur}}" name="umur" id="umur" placeholder="Masukkan umur">
            @error('umur')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <label for="bio">Biodata</label>
            <textarea name="bio" id="bio" class="form-control">{{$profil->bio}}</textarea>
            @error('bio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control">{{$profil->alamat}}</textarea>
            @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    @else 
    <form action="/profil" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan umur">
            @error('umur')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <label for="bio">Biodata</label>
            <textarea name="bio" id="bio" class="form-control"></textarea>
            @error('bio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control"></textarea>
            @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Profil</button>
    </form>
    @endif
@endsection