

@extends('layouts.mainlayout')

@section('title','Detail Berita')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center dberita mt-5">
            <div class="col-md-6" >
            <div> <img src="{{ Storage::url($data->thumbnail) }}" class="card-img-top"></div>
           
            </div>
            <div class="col-md-6">
                <h1>{{ $data->judul }}</h1>
                <div>{{ $data->news }}</div>
                <div>Penulis: {{ $data->penulis }}</div>
                <div>Tanggal Terbit: {{ $data->tanggal }}</div>
                <div> <a href="/"  class="btn btn-primary">Close</a></div>
            </div>
        </div>
            
    </div>

@endsection