@extends('layouts.main')
@section('content')
@section('title','Farmasi')
@section('judul','Farmasi')
    
<section id="about" class="about">
    <div class="container">
      <div class="row content">
        <div class="col-lg-6">
          <img src="img/rawat inap/vvip.jpg" alt="" style="width: 100%">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p class="fw-bold">1. DISTRIBUSI</p>
          <p>
            <span class="fw-bold">Farmasi Rumah Sakit Intan Husada</span> menggunakan Sistem Desentralisasi, diman terdiri dar 4 Depo
          </p>
          <p><span class="fw-bold"> 1. Depo Farmasi Rawat Jalan </span><br>
            Melayani resep perorangan dari dokter poliklinik RS Intan Husada 
          </p>
          <p><span class="fw-bold"> 2. Depo Farmasi Rawat Inap </span><br>
            Melayani Resep ODD (One Daily Dose) permintaan pengobatan pasien rawat inap untuk 1 hari penggunaan.
          </p>
          <p><span class="fw-bold"> 3. Depo Farmasi UGD </span><br>
            Melayani permintaan sediaan farmasi untuk pasien UGD 
          </p>
          <p><span class="fw-bold"> 4. Depo Farmasi Sentral </span><br>
            Melayani permintaan obat untuk Instalasi Bedah Sentral  
          </p>
        </div>
      </div>
      {{-- <br>
      <div class="row">
        <div class="col-lg-12">
          <p><span class="fw-bold">2. Pelayanan Klinis</span></p>
          <p></p>
        </div>
      </div> --}}
    </div>
  </section>

  <!-- ======= Portfolio Section ======= -->
  <section id="layanan" class="portfolio">
    <div class="container">
{{-- 
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <h1>Galeri</h1>
        </div>
      </div>
      <br> --}}

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="img/rawat inap/vvip.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Penghargaan 1</h4>
              <div class="portfolio-links">
                <a href="img/layanan/A2_Promo 99-01.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Penghargaan 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="img/rawat inap/vvip.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <div class="portfolio-links">
                <a href="img/rawat inap/vvip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/rawat inap/vvip.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <div class="portfolio-links">
                  <a href="img/rawat inap/vvip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>


      </div>

    </div>
  </section><!-- End Portfolio Section -->
@endsection