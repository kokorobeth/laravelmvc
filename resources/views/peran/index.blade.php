@extends('layout.master')

@section('title2')
    Tambah Peran
@endsection

@section('content')
<a href="/peran/create" class="btn btn-primary my-2">Tambah Peran</a>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Cast ID</th>
        <th scope="col">Film ID</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($peran as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->cast_id}}</td>
                <td>{{$value->film_id}}</td>
                <td>
                    <form action="/peran/{{$value->id}}" method="POST">
                        <a href="/peran/{{$value->id}}" class="btn btn-info">Show</a>
                        <a href="/peran/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
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