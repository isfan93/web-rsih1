@extends('layouts.main')
@section('content')
@section('title','Laboratorium')
@section('judul','Laboratorium')
    
    <div class="container">
      <div class="row content">
        {{-- <div class="col-lg-6">
          <img src="img/foto-poli/X-Ray Konvensional.jpg" alt="" style="width: 100%">
        </div> --}}
        <div class="col-lg-12">
          <p class="text-justify">
            Pelayanan 7 hari 24 jam seminggu, untuk pasien yang akan melakukan pemeriksaan laboratorium pukul 07:30-15:30 dapat langsung melakukan registrasi di bagian “Administrasi radiologi & Laboratorium”, sedangkan untuk pasien yang akan melakukan pemeriksaan laboratorium pukul 15:30-07:30 dapat langsung melakukan registrasi di Ruang Laboratorium.
          </p>
          <p>
            Pelayanan Laboratorium di Rumah Sakit Intan Husada selain dilengkapi dengan peralatan pemeriksaan yang canggih dan terbaru, juga didukung oleh tenaga ahli yang kompeten, diantaranya dokter spesialis patologi klinik dan analis yang profesional di bidangnya.
          </p>
          <p>
            Pelayanan laboratorium merupakan Pelayanan Penunjang yang membantu dokter dalam menegakan diagnosis.
          </p>
          <div class="row">
            <div class="col-6">
              <ul style="list-style: none">
                <li><i class="ri-check-double-line"></i> 1.	Pelayanan Hematologi </li>
                <li><i class="ri-check-double-line"></i> 2.	Pelayanan Kimia Klinik</li>
                <li><i class="ri-check-double-line"></i> 3.	Pelayanan Imunoserologi</li>
              </ul>
            </div>
            <div class="col-6">
              <ul style="list-style: none">
                <li><i class="ri-check-double-line"></i> 4.	Pelayanan Urinalisia </li>
                <li><i class="ri-check-double-line"></i> 5.	Laboratorium Patologi Anatomi & Laboratorium Mikrobiologi </li>
                <li><i class="ri-check-double-line"></i> 6.	Pelayanan produk darah</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
    </div>

    <div class="container">

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <h1>Fasilitas</h1>
        </div>
      </div>
      <br>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <a href="{{ route('p-view') }}"><div class="portfolio-wrap">
            <img src="img/penunjang/Lab-edt.jpg" class="img-fluid" alt="">
          </div></a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <a href=""><div class="portfolio-wrap">
            <img src="img/penunjang/Lab-edt.jpg" class="img-fluid" alt="">
          </div></a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href=""><div class="portfolio-wrap">
              <img src="img/penunjang/Lab-edt.jpg" class="img-fluid" alt="">
            </div></a>
          </div>


      </div>

      <div class="row portfolio-container mt-3">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <a href="{{ route('p-view') }}"><div class="portfolio-wrap">
            <img src="img/penunjang/Lab-edt.jpg" class="img-fluid" alt="">
          </div></a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <a href=""><div class="portfolio-wrap">
            <img src="img/penunjang/Lab-edt.jpg" class="img-fluid" alt="">
          </div></a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href=""><div class="portfolio-wrap">
              <img src="img/penunjang/Lab-edt.jpg" class="img-fluid" alt="">
            </div></a>
          </div>


      </div>

    </div>
@endsection