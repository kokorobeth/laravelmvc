@extends('layout.master')

@section('title')
    Edit Peran
@endsection

@section('content')
<div>
    <h2>Tambah Data</h2>
        <form action="/peran/{{$peran->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="cast_id">Cast ID</label>
                <input type="text" class="form-control" value="{{$peran->cast_id}}" name="cast_id" id="cast_id">
                @error('cast_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="film_id">Film ID</label>
                <input type="text" class="form-control" value="{{$peran->film_id}}" name="film_id" id="film_id" placeholder="Masukkan Title">
                @error('film_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
@endsection
