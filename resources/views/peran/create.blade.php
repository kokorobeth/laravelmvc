@extends('layout.master')

@section('title2')
    
@endsection

@section('content')
    <div>
        <h2>Tambah Data</h2>
            <form action="/peran" method="POST">
                @csrf
                <div class="form-group">
                    <label for="cast_id">Cast ID</label>
                    <select name="cast_id" id="cast_id" class="form-control">
                        <option value=""></option>
                    </select>
                    @error('cast_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="film_id">Film ID</label>
                    <label for="film_id">Cast ID</label>
                    <select name="film_id" id="film_id" class="form-control">
                        <option value=""></option>
                    </select>
                    @error('film_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('film_id')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                <button type="submit" class="btn btn-primary">Create Peran</button>
            </form>
    </div>
@endsection