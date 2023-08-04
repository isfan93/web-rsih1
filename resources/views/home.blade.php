@extends('layouts.main')
@section('content')
@section('title','BERANDA')
<section id="hero" style="margin-top: -50px;">
    <div id="heroCarousel" data-bs-interval="10000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      {{-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> --}}

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/home/slide1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di Website Official<br><span>Rumah Sakit Intan Husada Garut</span></h2>
              <p class="animate__animated animate__fadeInUp">Menjadi Rumah Sakit pilihan untuk masyarakat Garut dan sekitarnya <br>
                melalui layanan medis yang berkualitas, proses yang mudah dan profesional</p>
              <a href="#layanan" class="btn-get-started animate__animated animate__fadeInUp scrollto">Layanan Unggulan</a>
            </div>
          </div>
        </div>
      </div>

      
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(img/home/slide2.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(img/home/slide3.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/home/slide4.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/home/slide5.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(img/home/slide6.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <section id="" class="">
    <div class="container">
      <div class="row">

      <div class="card-group">
        <div class="col-sm-12">
        <div class="card" style="padding-top: 15px">
          <img class="card-img-top" src="img/layanan/UGD.jpg" alt="Card image cap"  style="width: 700px; height: 450px; margin: auto auto ">
          <div class="card-body text-center">
            {{-- <h5 class="card-title">Ambulance Emergency</h5> --}}
            <h1 class="biodata" style="width: 570px; height: 50px; margin: auto auto; background-color: #e12233"><i class="ri-phone-fill"></i>(0262) 2800-900</h1>
          </div>
        </div>
      </div>    
      </div>
    </div>
    </div>
  </section>

  {{-- card --}}
  <div class="container">
  <div class="row mt-3">
    <div class="col-lg-12">
      <div class="row">
       <h1 class="biodata">Rawat Inap</h1>

       <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-4 col">
                <div class="card info-card sales-card">
                  <div class="card-title text-center pt-1">
                    <h3>VVIP</h3>
                  </div>
                  <div class="card-body">
                  <a href="/vvip"><img src="/img/rawat inap/vvip.jpg" style="width: 100%; height: 100%;" alt=""></a>
                  </div>
                </div>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col">
                <div class="card info-card sales-card">
                  <div class="card-title text-center pt-1">
                    <h3>VIP</h3>
                  </div>
                  <div class="card-body">
                    <img src="/img/rawat inap/vip.jpg" style="width: 100%; height: 100%;" alt="">
                  </div>
                </div>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col">
                <div class="card info-card sales-card">
                  <div class="card-title text-center pt-1">
                    <h3>Kelas Utama</h3>
                  </div>
                  <div class="card-body">
                    <img src="/img/rawat inap/utama.jpg" style="width: 100%; height: 100%;" alt="">
                  </div>
                </div>
              </div><!-- End Sales Card -->
                  </div>
                </div>
          <div class="carousel-item">
            <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-4 col">
                <div class="card info-card sales-card">
                  <div class="card-title text-center pt-1">
                    <h3>Kelas 1</h3>
                  </div>
                  <div class="card-body">
                  <a href="/vvip"><img src="/img/rawat inap/vvip.jpg" style="width: 100%; height: 100%;" alt=""></a>
                  </div>
                </div>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col">
                <div class="card info-card sales-card">
                  <div class="card-title text-center pt-1">
                    <h3>Kelas 2</h3>
                  </div>
                  <div class="card-body">
                    <img src="/img/rawat inap/kelas2.jpg" style="width: 100%; height: 100%;" alt="">
                  </div>
                </div>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col">
                <div class="card info-card sales-card">
                  <div class="card-title text-center pt-1">
                    <h3>Kelas 3</h3>
                  </div>
                  <div class="card-body">
                    <img src="/img/rawat inap/kelas1.jpg" style="width: 100%; height: 100%;" alt="">
                  </div>
                </div>
              </div><!-- End Sales Card -->
                  </div>
          </div>
          {{-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      </div>
    </div>
  </div>
</div>
  {{-- end card --}}

   <!-- ======= Portfolio Section ======= -->
   <section id="layanan" class="portfolio">
    <div class="container">

      <div class="row">
        <h1 class="biodata">Layanan Kami</h1>
      </div>
      <br>

      <div class="row portfolio-container">

        @foreach ($layanan as $lay)
        
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <a href="img/layanan/{{ $lay->gambar }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Penghargaan 1">
            <div class="portfolio-wrap">
            <img src="img/layanan/{{ $lay->gambar }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $lay->nama_layanan }}</h4>
            </div>
          </div></a>
        </div>
         @endforeach
     </div>

    </div>
  </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
@endsection