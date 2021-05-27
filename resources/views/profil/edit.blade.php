@extends('layout.master')

@section('title')
    Edit Profil
@endsection

@section('content')
<div>
    <h2>Tambah Data</h2>
        <form action="/profil/{{$profil->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Umur</label>
                <input type="text" class="form-control" value="{{$profil->umur}}" name="umur" id="title" placeholder="Masukkan Title">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="title">Bio</label>
                <input type="text" class="form-control" value="{{$profil->bio}}" name="bio" id="title" placeholder="Masukkan Title">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="title">Alamat</label>
                <input type="text" class="form-control" value="{{$profil->alamat}}" name="alamat" id="title" placeholder="Masukkan Title">
                @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="title">User_id</label>
                <input type="text" class="form-control" value="{{$profil->user_id}}" name="user_id" id="title" placeholder="Masukkan Title">
                @error('user_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
@endsection
