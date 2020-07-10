@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row mt-3">
       
        <div class="card mb-2" style="width: 200rem;">
            <div class="card-body">
                <h5 class="card-subtitle mb-1">Created at : {{$question->created_at}}</h5>
                <h5 class="card-subtitle mb-2">Update at : {{$question->update_at}}</h5>
                <h3 class="card-title">Pertanyaan: {{$question->description}} </h3>
                <h6 class="card-subtitle mb-2 text-muted">Tema: {{$question->title}} <br></h6>
                <a href="/answer/create/{{$question->id}}" class="btn btn-success">Jawab</a>
                <a href="/question" class="btn btn-primary">Kembali</a>
            </div>
        </div>
       

        @foreach($quest as $data)
        <div class="card mt-3" style="width: 200rem;">
            <div class="card-body">
                <h5 class="card-title mb-3 text-muted">{{$loop->iteration}}. Jawab: </h5>
                <h6 class="card-subtitle mb-2">{{$data->answer_content}} <br></h6>
                <from action="/jawaban/{{$data->id}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </from>
            </div>
        </div>
        @endforeach
        
    </div>
</div>

@endsection