@extends('layout.master')

@section('title2')
    Show Genre Id : {{$genre->id}}
@endsection

@section('content')
    
<h4>{{$genre->nama}}</h4>

@endsection