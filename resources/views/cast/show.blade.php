@extends('layout.master')

@section('title2')
    Show Cast Id : {{$cast->id}}
@endsection

@section('content')
    
<h4>Nama : {{$cast->nama}}</h4>
<h4>Umur : {{$cast->umur}}</h4>
<h4>Bio : {{$cast->bio}}</h4>

@endsection