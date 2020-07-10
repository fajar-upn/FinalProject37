@extends('layouts/app')

@section('title','Tambah Data Pertanyaan')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mt-3">
                <h1>Tambah Data Pertanyaan</h1>
                <form method="POST" action="/question">
                @csrf
                    <div class="form-group">
                        <label for="title">Tema</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukkan tema" name="title" value="{{old('title')}}">
                        @error('title')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Masukkan deskripsi" name="description" value="{{old('description')}}"></textarea>
                        @error('description')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
</div>
@endsection