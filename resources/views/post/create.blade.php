@extends('layout.master')

@section('title')
    Tambah Post
@endsection

@section('content')


<div>
    <h2>Tambah Data</h2>
        <form action="/post" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" class="form-control" name="body" id="body" placeholder="Masukkan body">
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
</div>

@endsection