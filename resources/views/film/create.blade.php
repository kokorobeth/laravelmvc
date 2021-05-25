@extends('layout.master')

@section('title2')
    Tambah Film
@endsection

@section('content')
<div>
        <form action="/film" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <input type="text" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan Ringkasan">
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun">Tahun</label>
                <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukkan Tahun">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genre_id">Genre</label>
                <select name="genre_id" id="" class="form-control">
                    <option value="">-</option>
                    @foreach ($genres as $value)
                        <option value="{{$value->id}}">{{$value->nama}}</option>
                    @endforeach
                </select>
                @error('genre_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" name="poster" id="poster">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection