@extends('layout.master')

@section('title2')
    Tampilan hasil
@endsection

@section('content')
    <h1>UserName : {{$users->name}}</h1>
    <h1>Email : {{$users->email}}</h1>
    <h1>Password : {{$users->password}}</h1>
@endsection