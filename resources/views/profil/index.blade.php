@extends('layout.master')

@section('title2')
    Profil
@endsection

@section('content')
    <a href="/profil/create" class="btn btn-primary my-2">Tambah</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Umur</th>
            <th scope="col">Bio</th>
            <th scope="col">Alamat</th>
            <th scope="col">User ID</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($profil as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->umur}}</td>
                    <td>{{$value->bio}}</td>
                    <td>{{$value->alamat}}</td>
                    <td>{{$value->user_id}}</td>
                    <td>
                        <form action="/profil/{{$value->id}}" method="POST">
                            <a href="/profil/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/profil/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>No data</td>
                </tr>  
            @endforelse              
        </tbody>
    </table>
@endsection