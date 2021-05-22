@extends('layout.master')

@section('title')
    Tambah Data Profil
@endsection

@section('content')


<div>
    <h2>Tambah Data</h2>
        <form action="/profil" method="POST">
            @csrf
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan Umur">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukkan Bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat">
                @error('alamat')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="user_id">User Id</label>
                <input type="text" class="form-control" name="user_id" id="user_id" placeholder="Masukkan user_id">
                @error('user_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>

@endsection