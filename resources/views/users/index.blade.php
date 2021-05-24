@extends('layout.master')

@section('title2')
    
@endsection

@section('content')
    <a href="users/create" class="btn btn-primary my-2">Tambah</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <td scope="col">#</td>
                <td scope="col">Username</td>
                <td scope="col">Email</td>
                <td scope="col">Password</td>
                <td scope="col">Action</td>
            </tr>
        </thead>
        <tbody> 
            @forelse ($users as $key=>$value)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->password}}</td>
                    <td>
                        <form action="/users" method="POST">
                            <a href="/users/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/users/{{$value->id}}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>No Data</td>
                </tr>
            @endforelse
           
        </tbody>
    </table>
@endsection