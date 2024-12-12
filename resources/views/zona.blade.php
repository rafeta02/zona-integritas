@extends('layouts.mainlayout')

@section('title','Berita')

@section('content')



  
  <body>   
 
    <!-- Content berita terupdate -->
    <div class="container-fluid pt-5 pb-5 bg-light ">
      <div class="container text-center" id="kegiatan">
          <div class="row py-2 ">
    
              <h3 class="text-primary">Berita terupdate</h3>

            <div class="col-md-4 col-lg-4 pt-5" >
              <div class="search mb-3"  style="width: 100%;">
                  <img src="{{ Storage::url($datatable3->thumbnail) }}" class="card-img-top" alt="">
                  <div class="card-body">
                       <div><h5 class="card-title judul">{{$datatable3->judul}}</h5></div>
                       <a href="/berita/detail/{{$datatable3->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
                  </div>
                  <div class="card-footer" data-published-date="{{$datatable3->created_at}}">
                    <small> <p class="time-published">{{$datatable3->created_at->format('d M Y')}}</p></small>
                  </div>
              </div>
            </div> 
      <div class="col-md-4 col-lg-4 pt-5">
        <div class="search mb-3" style="width: 100%;">
        <img src="{{ Storage::url($datatable2->thumbnail) }}" class="card-img-top" alt="">
              <div class="card-body">
                <div><h5 class="card-title judul">{{$datatable2->judul}}</h5></div>
                
                <a href="/berita/detail/{{$datatable2->slug }}" class="btn btn-primary">Baca Selengkapnya</a>
              </div>
              <div class="card-footer"data-published-date="{{$datatable3->created_at}}">
                <small> <p class="time-published" >{{$datatable2->created_at->format('d M Y')}}</p></small>
              </div>
        </div>
    </div> 
    <div class="col-md-4 col-lg-4 pt-5">
      <div class="search mb-3" style="width: 100%;">
        <img src="{{ Storage::url($datatable1->thumbnail) }}" class="card-img-top" alt="">
            <div class="card-body">
              <div><h5 class="card-title judul">{{$datatable1->judul}}</h5></div>
              
              <a href="/berita/detail/{{$datatable1->slug }}"   class="btn btn-primary">Baca Selengkapnya</a>
            </div>
            <div class="card-footer" data-published-date="{{$datatable3->created_at}}">
              
              <small> <p class="time-published">{{$datatable1->created_at->format('d M Y')}}</p></small>
            </div>
      </div>
  </div> 
  
   </div>
    

      
            <!-- slider -->
            <div class="container-fluid pt-5 pb-5 bg-light">
              
              <div class="container">
                <h2 class="display-4" id="zona">Kerangka Membangun Zona Integritas</h2> 
            <p>Pembangunan Zona Integritas mencakup dua komponen, yaitu 
              pengungkit dan hasil. Komponen pengungkit merupakan aspek tata 
              kelola (governance) internal unit kerja dan komponen hasil merupakan 
              bagaimana stakeholder merasakan dampak/hasil dari perubahan yang 
              telah dilakukan pada area pengungkit. Di bawah ini adalah gambar yang 
              menunjukkan hubungan masing-masing komponen dan indikator 
              pembangun komponen.</p> 
                <h3 class="card-header text-center" id="tentang">Mekanisme Pembangunan Zona Integritas </h3>
                <!-- batas -->
                <div class="row pt-4 gx-4 gy-4">
                  <div class="col-md-6 text-center kerangka">
                    <img
                      src="assets/img/kerangka-zona.png" 
                       
                    />
                    
                  </div>
                  <div class="col-md-5 text-center  news">
                    
                      <p>Untuk mempercepat sasaran reformasi birokrasi maka perlu membangun  zona 
                      integritas untuk mencapai birokrasi yang bersih dan akuntabel, serta pelayanan publik yang prima.
                      mekanisme pembangunan zona integritas dilakukan melalui beberapa tahap diantaranya<br>
                      <tr>
                      <td>1.  </td><td>Pencanangan zona integritas</td><br>
                      <td>2.  </td><td>Pembangunan Zona Integritas</td><br>
                      <td>3.  </td><td>Penetapan Unit Kerja</td><br>
                      <td>4.  </td><td>Pembangunan unit Kerja</td><br>
                      <td>5.  </td><td>Pemantauan Pembangunan Zona Integritas</td>
                      </tr>
                    </p>

                      
                    
                  </div>
                </div>
<!-- akhir  -->

<script>
  function timeSince(date) {
      const seconds = Math.floor((new Date() - date) / 1000);
      let interval = Math.floor(seconds / 31536000);

      if (interval > 1) return interval + " tahun yang lalu";
      interval = Math.floor(seconds / 2592000);
      if (interval > 1) return interval + " bulan yang lalu";
      interval = Math.floor(seconds / 86400);
      if (interval > 1) return interval + " hari yang lalu";
      interval = Math.floor(seconds / 3600);
      if (interval > 1) return interval + " jam yang lalu";
      interval = Math.floor(seconds / 60);
      if (interval > 1) return interval + " menit yang lalu";
      return seconds + " detik yang lalu";
  }

  document.querySelectorAll('.news-item').forEach(item => {
      const publishedDate = new Date(item.getAttribute('data-published-date'));
      const timePublishedElement = item.querySelector('.time-published');
      timePublishedElement.innerText = "Terbit: " + timeSince(publishedDate);
  });
</script>
@endsection
 
 