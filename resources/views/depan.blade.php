@php
$site_name=get_setting_value('_site_name');
$location=get_setting_value('_location');
$site_description=get_setting_value('_site_description');
$youtube=get_setting_value('_youtube');
$partner=get_partner_value('LPPM UNS');
$jumbotron=get_section_data('JUMBOTRON');
$about=get_section_data('ABOUT');

@endphp
<style>
.carousel-inner img {
            max-width: 600px;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .carousel-item {
            display: flex;
            justify-content: center;
        }
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $site_name }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">{{ $site_name }}</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#zona">Zona Integritas</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#partner">Partner</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#profile">Profile</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{ Storage::url($jumbotron->thumbnail) }}" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">{{ $jumbotron->title}}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{{ $jumbotron->content }}</p>
      </div>
    </header>
   
    <!-- Berita Section-->
    <section id="zona">
      <div class="container-fluid py-5">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1 class="text-center">{{ $partner->title }}</h1>
            </div>
            <div class="row">
              <div class="col-6">
                Dengan mengucap syukur alhamdulillah atas ridho dan 
                bimbingan Allah SWT serta dukungan Bapak/Ibu Supertim 
                LPPMP tugas-tugas yang diamanahkah kepada  LPPMP dapat terlaksana dengan baik. 
                Saya mengucapkan apresiasi dan terima kasih atas dedikasi dan kerja keras Bapak/Ibu. 
                Kiranya belum semua yang kita cita-citakan dapat tercapai. 
                Untuk itu, atas nama pimpinan dan pribadi saya mohon maaf atas khilaf dan salah.  
                Semoga ke depan LPPMP berkinerja makin baik. 
                Semoga bapak/Ibu dan keluarga senantiasa pinaringan sehat dan berbahagia.
                 Aamiin Ya Robbal Alamiin.

              </div>
              <div class="col-5">
                Dengan mengucap syukur alhamdulillah atas ridho dan 
                bimbingan Allah SWT serta dukungan Bapak/Ibu Supertim 
                LPPMP tugas-tugas yang diamanahkah kepada  LPPMP dapat terlaksana dengan baik. 
                Saya mengucapkan apresiasi dan terima kasih atas dedikasi dan kerja keras Bapak/Ibu. 
                Kiranya belum semua yang kita cita-citakan dapat tercapai. 
                Untuk itu, atas nama pimpinan dan pribadi saya mohon maaf atas khilaf dan salah.  
                Semoga ke depan LPPMP berkinerja makin baik. 
                Semoga bapak/Ibu dan keluarga senantiasa pinaringan sehat dan berbahagia.
                 Aamiin Ya Robbal Alamiin.
              </div>
            </div>
          </div>
        </div>
      
      </div>

      <!--fitur section-->

      
      <section  id="fitur">
        
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
         
          
              <div class="carousel-inner ">
                <div class="carousel-item active" >
                  <img src="assets/img/Logo_UNS biru.png"style=" align-items: center;" class="d-block w-100" alt="">
                </div>
              
              <div class="carousel-item">
                <img src="assets/img/Logo-lppmp.png" class="d-block w-100" alt="">
              </div>
              
              <div class="carousel-item">
                <img src="assets/img/about.png" class="d-block w-100" alt="...">
              </div>
              </div>
          
      </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        
        </div>
        
          



    </section>

     

    <!-- About Section-->
    
    <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">{{ $about->title }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-3 ms-auto text-center"><img src="{{ storage::url($about->thumbnail)}}" class="w-75" /></div>
          <div class="col-lg-5 me-auto lead">
            {{  $about->content  }}
          </div>
        </div>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center" id="profile">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">
              {{$location}}
            </p>
          </div>
          <!-- Footer Social Icons-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            @if($youtube)
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $youtube }}" target="blank"><i class="fab fa-fw fa-youtube"></i></a>
            @endif

            
          </div>
          <!-- Footer About Text-->
          <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">About</h4>
            <p class="lead mb-0">
            {{$site_description}}
              .
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
      <div class="container"><small>Copyright &copy; {{ $site_name }}2024</small></div>
    </div>
    <!-- Partner Modals-->
    <!-- Partner Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Partner Modal - Title-->
                  <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                  <!-- Icon Divider-->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Partner Modal - Image-->
                  <img class="img-fluid rounded mb-5" src="assets/img/partner/cabin.png" alt="..." />
                  <!-- Partner Modal - Text-->
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                  <button class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fas fa-xmark fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="js/bootsrap.min.js"></script>
    
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
