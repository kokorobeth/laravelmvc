@extends('layout.master')

@section('title2')
    Show Profil Id : {{$profil->user_id}}
@endsection

@section('content')
    
<h4>Nama : {{$profil->umur}}</h4>
<h4>Umur : {{$profil->bio}}</h4>
<h4>Bio : {{$profil->alamat}}</h4>

@endsection