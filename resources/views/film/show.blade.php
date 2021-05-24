@extends('layout.master')

@section('title2')
    Show Genre Id : {{$cast->id}}
@endsection

@section('content')
    
<h4>Judul : {{$film->judul}}</h4>
<h4>Ringkasan : {{$film->ringkasan}}</h4>
<h4>Film : {{$film->tahun}}</h4>
<h4>Poster : {{$film->poster}}</h4>


@endsection