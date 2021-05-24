@extends('layout.master')

@section('title2')
    List Film
@endsection

@section('content')
    <a href="{{route('film.create')}}" class="btn btn-primary my-2">Tambah</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Ringkasan</th>
            <th scope="col">Tahun</th>
            <th scope="col">Poster</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($film as $key=>$value)
                <tr>
                    <td>{{$key + 1}}</th>
                    <td>{{$value->judul}}</td>
                    <td>{{$value->ringkasan}}</td>
                    <td>{{$value->tahun}}</td>
                    <td>{{$value->poster}}</td>
                    <td>
                        <form action="/film/{{$value->id}}" method="POST">
                            <a href="/film/{{$value->id}}" class="btn btn-info">Show</a>
                            <a href="/film/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
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