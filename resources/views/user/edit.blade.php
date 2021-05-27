@extends('layout.master')

@section('title')
    Edit User
@endsection

@section('content')
<div>
    <h2>Tambah Data</h2>
        <form action="/user/{{$user->id}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$user->name}}" name="name" id="name">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="email">email</label>
                <input type="text" class="form-control" value="{{$user->email}}" name="email" id="email">
                @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <label for="password">Password</label>
                <input type="password" class="form-control" value="{{$user->password}}" name="password" id="password">
                @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
@endsection
