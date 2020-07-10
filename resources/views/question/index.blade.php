@extends('layouts/app')

@section('title','Daftar Pertanyaan')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h1>Daftar Pertanyaan</h1>
                    <a href="/question/create" class="btn btn-success my-3">Tambah Pertanyaan</a>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Tema</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($question as $question)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$question->title}}</td>
                                    <td>{{$question->description}}</td>
                                    <td>
                                        <a href="/question/{{$question->id}}" class="badge badge-primary">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
</div>
@endsection