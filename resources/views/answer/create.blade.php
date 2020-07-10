@extends('layouts/app')

@section('title','Tambah Data Jawaban')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mt-3">
                <h3>Pertanyaan: {{$question->description}}</h3>
                <h6 class="text-muted">Tema: {{$question->theme}}</h6>
                <form method="POST" action="/answer/{{$question->id}}">
                @csrf
                    <div class="form-group">
                        <h5 for="answer_content">Jawab: </h5>
                        <textarea type="text" class="form-control @error('answer_content') is-invalid @enderror" id="answer_content" placeholder="Masukkan jawaban" name="answer_content" value="{{old('answer_content')}}"> </textarea>
                        @error('answer_content')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Tambah Data</button>
                    <a href="/question/{{$question->id}}" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
</div>
@endsection