@extends('layout.master')

@section('title2')
    Show cast Id : {{$post->id}}
@endsection

@section('content')
    

<h2>Show Post {{$post->id}}</h2>
<h4>{{$post->title}}</h4>
<p>{{$post->body}}</p>

@endsection