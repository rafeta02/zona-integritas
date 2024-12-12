@extends('layouts/mainlayout')

@section('title', 'Search')

@section ('content')

<div class="container-fluid pt-5 pb-5 bg-light ">  
<div class="container   text-center " id="kegiatan">
    @if($news->isEmpty())
            <p>No news found.</p>
    @else
    <div class="row py-2 d-flex justify-content-center">
        @foreach($news as $item)
            <div class="col-md-4 "> <!-- Tambahkan margin bawah -->
                <div class="search mb-3" style="width: 100%;"> <!-- Gunakan lebar penuh untuk kartu -->
                    <img src="{{ Storage::url($item->thumbnail) }}" class="card-img-top" alt="">
                    <div class="card-body  ">
                        <h5 class="card-text">{{ $item->judul }}</h5>
                        <a href="/berita/detail/{{$item->slug}}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                    <div class="card-footer">
                        <small> <p class="time-published" id="timePublished">{{$item->created_at->format('d M Y')}}</p></small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
            {{ $news->links() }} <!-- Menambahkan pagination -->
    @endif
        </div>
            <div class="text-center"> <a href="/"  class="btn btn-primary">back</a></div>  
</div> 
</div>
@endsection