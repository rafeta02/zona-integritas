
@php
$site_name=get_setting_value('_site_name');
$location=get_setting_value('_location');
$telpon=get_setting_value('_telpon');
$email=get_setting_value('_email');

$ketua=get_tim_data('ketua');
$wakil=get_tim_data('wakil');
$sek=get_tim_data('sek');
$koord1=get_tim_data('1');
$koord2=get_tim_data('2');
$koord3=get_tim_data('3');
$koord4=get_tim_data('4');
$koord5=get_tim_data('5');
$koord6=get_tim_data('6');

$dataLogo=get_logo('2');
$dataBanner=get_logo('3');
$datalogoUns=get_logo('4');


    

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $site_name }} | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand " style="font-size: 40px;" href="#">LPPMP-UNS</a>
          <div class="logobanner"><img src="{{ Storage::url($datalogoUns->image) }}"></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size: large;">
                           
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
              <li class="nav-item"></li>
                <a class="nav-link" href="#kegiatan">Kegiatan</a>
              </li>
              
              <li class="nav-item"></li>
                <a class="nav-link" href="#tentang">Tentang</a>
              </li>
              <li class="nav-item"></li>
                <a class="nav-link" href="#tim">Tim Zona Integritas</a>
              </li>
              <li class="nav-item"></li>
                <a class="nav-link" href="#kontak">Kontak Kami</a>
              </li>
              <li class="nav-item"></li>
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
            </ul>
            <form class="d-flex" role="search" action="{{ '/search' }}" method="get">
              <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
<!-- akhir Navbar -->
 <!-- Awal Banner -->
 <div class="container-fluid" style="background: url('{{ Storage::url($dataBanner->image) }}') no-repeat center center; background-size: cover; padding-top: 10%; padding-bottom: 2%; color: aliceblue; height: 40vh;">
        <div class="container text-center" >
            <h4 class="display-6"> Selamat Datang di Web Zona Integritas</h4>
            <h3 class="display-3">Lppmp-uns Menuju WBK/WBBM</h3>
            
            </div>
        </div>
         <!-- akhir Banner -->

         <

         @yield('content')

         
      

<!-- tim kami -->
<div class="container-fluid  bg-light" id="tim">
      <div class="container text-center">
                  <h2 class="display-3" id="staff">Tim Zona Integritas LPPMP-UNS</h2>
                  <p>
                    Untuk membangun zona integritas maka lppmp membentuk tim kerja yg terdiri dari ketua tim, sekretaris dan anggota
                  </p>
        <div class="row pt-4 gx-4 gy-4 align-items-center ">
          <div class="col-md-12  tim">
            <img
              src="{{ Storage::url($ketua->thumbnail) }}"
              class="rounded-circle mb-3" 
            />
            <h6 >{{$ketua->nama}}</h6>
            <p>{{$ketua->jabatan}}</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          
          
        </div>
      </div>
    </div>

    <div class="container-fluid  pt-5 pb-5">
        <div class="container text-center pengukit">
            
            
                <div class="row pt-4">
                    <div class="col-md-4">
                        <span  class="tim2"><img src="{{ Storage::url($koord1->thumbnail) }}"  class="rounded-circle mb-3" >
                          <p style="font-size: 16px;">{{ $koord1->nama }}</p>
                          <p>{{ $koord1->jabatan }}</p>
                        </span>
                           <h3 class="mt-3 card-header ">Manajemen Perubahan</h3>

                        <p class="news"> Manajemen Perubahan bertujuan untuk mentransformasi sistem 
                          dan mekanisme kerja organisasi serta mindset (pola pikir) dan cultureset 
                          (cara kerja) individu ASN menjadi lebih adaptif, inovatif, responsive, 
                          profesional, dan berintegritas sehingga dapat memenuhi tuntutan
                          perkembangan zaman dan kebutuhan masyarakat yang semakin 
                          meningkat.
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="tim2"><img src="{{ Storage::url($koord2->thumbnail) }}"  class="rounded-circle mb-3" >
                          <p style="font-size: 16px;">{{ $koord2->nama }}</p>
                          <p>{{ $koord2->jabatan }}</p></span>
                           <h3 class="mt-3 card-header" >Penataan Tatalaksana</h3>
                        <p class="news">Penataan tatalaksana bertujuan untuk meningkatkan efisiensi dan 
                          efektivitas sistem, proses, dan prosedur kerja yang jelas, efektif, efisien, 
                          dan terukur pada Zona Integritas menuju WBK/WBBM. 
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="tim2 "><img src="{{ Storage::url($koord3->thumbnail) }}"  class="rounded-circle mb-3" >
                          <p style="font-size: 16px;">{{ $koord3->nama }}</p>
                          <p>{{ $koord3->jabatan }}</p></span>
                           <h3 class="mt-3 card-header">Penataan Manajemen SDM</h3>
                        <p class="news"> Penataan sistem manajemen SDM aparatur bertujuan untuk 
                          meningkatkan profesionalisme SDM aparatur pada Zona Integritas 
                          Menuju WBK/WBBM. 
                            </p>
                    </div>
                </div>

                <div class="row pt-4">
                    <div class="col-md-4">
                        <span class="tim2"><img src="{{ Storage::url($koord4->thumbnail) }}"  class="rounded-circle mb-3" >
                          <p style="font-size: 16px;">{{ $koord4->nama }}</p>
                          <p>{{ $koord4->jabatan }}</p></span>
                           <h3 class="mt-3 card-header">Penguatan Akuntabilitas</h3>
                        <p class="news">Akuntabilitas kinerja adalah perwujudan kewajiban suatu instansi 
                          pemerintah untuk mempertanggungjawabkan keberhasilan/kegagalan 
                          pelaksanaan program dan kegiatan dalam mencapai misi dan tujuan 
                          organisasi. Program ini bertujuan untuk meningkatkan kapasitas dan 
                          akuntabilitas kinerja instansi pemerintah.
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="tim2"><img src="{{ Storage::url($koord5->thumbnail) }}"  class="rounded-circle mb-3" >
                          <p style="font-size: 16px;">{{ $koord5->nama }}</p>
                          <p>{{ $koord5->jabatan }}</p></span>
                           <h3 class="mt-3 card-header">Penguatan Pengawasan</h3>
                        <p class="news"> Penguatan  pengawasan bertujuan untuk meningkatkan 
                          penyelenggaraan pemerintahan yang bersih dan bebas KKN pada masing- 
                          masing instansi pemerintah.
                            </p>
                    </div>
                    <div class="col-md-4">
                        <span class="tim2"><img src="{{ Storage::url($koord6->thumbnail) }}"  class="rounded-circle mb-3" >
                          <p style="font-size: 16px;">{{ $koord6->nama }}</p8>
                          <p>{{ $koord6->jabatan }}</p></span>
                        
                           <h3 class="mt-3 card-header">Peningkatan Pelayanan Publik</h3>
                        <p class="news"> Peningkatan kualitas pelayanan publik merupakan suatu upaya 
                          untuk meningkatkan kualitas dan inovasi pelayanan publik pada masing- 
                          masing instansi pemerintah secara berkala sesuai kebutuhan dan 
                          harapan masyarakat. Disamping itu, peningkatan kualitas pelayanan 
                          publik dilakukan untuk membangun kepercayaan masyarakat terhadap 
                          penyelenggara pelayanan publik dalam rangka peningkatan 
                          kesejahteraan masyarakat dengan menjadikan keluhan masyarakat 
                          sebagai sarana untuk melakukan perbaikan pelayanan publik.
                            </p>
                    </div>
                </div>
        </div>
    </div>
   
   
      </div>
      
    
      <!-- kontak -->
      <div class="container-fluid pt-5 pb-5 kontak" id="kontak">
        <div class="container">
          <div class="row pt-4 ">
            <div class="col-md-4"  style="text-align: left;">
              <span class="logo alamat"><img src="{{ Storage::url($dataLogo->image) }}"></i></span>
              <h3 class="display-8 alamat" >Kontak Kami</h3>
              <p class="alamat">
                  LPPMP-UNS<br>
                  {{ $location }}<br>
                  Telp {{ $telpon }}<br>
                  email: {{ $email }}<br>
              </p>
            </div>

            <div class="col-md-4"  style="text-align: left;">
                <h3 class="display-8" >Layanan Pengaduan</h3>
                <p class="text-left">laporkan ke link berikut jika anda punya informasi     </p>
                  <li class="nav-item ">
                    <a class="btn btn-primary" href="{{ url('/lapor') }}" target="_blank">Lapor Gratifikasi</a>
                  </li>
                 
                  <li class="nav-item mt-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#aduanModal">
                      Buat Aduan
                  </button></li>
                    
                  
            </div>
            <div class="col-md-4 text-left ">
                <h3 class="display-8" >Indek Kepuasan</h3>
                <p class=" display-3 ">89,99 </p>
                <div>Link :</div>
                <div class="nav-item">
                  <a href="{{ url('/survey') }}" class="btn btn-primary">Ikuti Survei</a>
                  
                </div>
            </div>
          </div>
          </div>
      </div>
       
      <div class="container text-center pt-5 pb-5">
        Copyright Lppmp-uns  &copy; 2024 | UNIVERSITAS SEBELAS MARET | Design by Mulyono
      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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

</body>

   <!-- Modal form aduan-->
<div class="modal fade" id="aduanModal" tabindex="-1" aria-labelledby="aduanModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form action="#" method="POST">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="aduanModalLabel">Form Aduan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="form-group">
              <label for="email">email</label>
              <input type="text" class="form-control" name="email" required>
              </div>
              
                  <div class="form-group">
                      <label for="judul">Judul/Hal</label>
                      <input type="text" aria-colspan="1" class="form-control" name="judul" required>
                  </div>
                  <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <textarea class="form-control" name="deskripsi" rows="5" required></textarea>
                  </div>
                  
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-primary">Kirim Aduan</button>
              </div>
          </form>
      </div>
  </div>
</div>
</div>
  


