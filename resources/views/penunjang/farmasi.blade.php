@extends('layouts.main')
@section('content')
@section('title','Farmasi')
@section('judul','Farmasi')
    
<section id="about" class="about">
    <div class="container">
      <div class="row content">
        <div class="col-lg-6">
          <img src="img/farmasi/far1.jpg" alt="" style="width: 100%">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <p>
            <span class="fw-bold">Farmasi Rumah Sakit Intan Husada</span> menggunakan Sistem Desentralisasi, dimana terdiri dari 4 Depo
          </p>
          <p><span class="fw-bold"> 1. Depo Farmasi Rawat Jalan </span><br>
            Melayani resep perorangan dari dokter poliklinik RS Intan Husada 
          </p>
          <p><span class="fw-bold"> 2. Depo Farmasi Rawat Inap </span><br>
            UDD (Unit Dose Dispensing) sistem distribusi obat dengan cara pemberian sediaan farmasi kepada pasien terutama di rawat inap dalam bentuk dosis tunggal, diserahkan untuk sekali pemakaian selama pengobatan
          </p>
          <p><span class="fw-bold"> 3. Depo Farmasi UGD </span><br>
            Melayani permintaan sediaan farmasi untuk pasien UGD 
          </p>
          <p><span class="fw-bold"> 4. Depo Farmasi Khusus</span><br>
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

        <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
          <div class="card h-100">
            <img src="img/farmasi/Informasi farmasi rajal compress.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Pelayanan Informasi Obat</h5>
              <p class="card-text"></p>
              <a href="/farmasi_detail2" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
          <div class="card h-100">
            <img src="img/farmasi/far3.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Peracikan Obat Steril</h5>
              <p class="card-text"></p>
              <a href="/farmasi_detail1" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
          <div class="card h-100">
            <img src="img/farmasi/far4.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Peracikan Obat Non Steril</h5>
              <p class="card-text"></p>
              <a href="/farmasi_detail3" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
          <div class="card h-100">
            <img src="img/farmasi/Informasi compress.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Visite Apoteker</h5>
              <p class="card-text"></p>
              <a href="/farmasi_detail4" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
            </div>
          </div>
        </div>
        

      </div>

    </div>
  </section><!-- End Portfolio Section -->
@endsection