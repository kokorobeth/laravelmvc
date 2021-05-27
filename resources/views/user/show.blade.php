@extends('layout.master')

@section('title2')
    Tampilan hasil
@endsection

@section('content')
    <h1>UserName : {{$user->name}}</h1>
    <h1>Email : {{$user->email}}</h1>
    <h1>Password : {{$user->password}}</h1>
@endsection