@extends('layouts.main')
@section('content')
@section('title','Radiologi')
@section('judul','Radiologi')
    
    <div class="container">
      <div class="row content">
        {{-- <div class="col-lg-6">
          <img src="img/foto-poli/X-Ray Konvensional.jpg" alt="" style="width: 100%">
        </div> --}}
        <div class="col-lg-12">
          <p class="text-justify">
            Radiologi adalah Prosedur medis yang dapat dilakukan untuk mendiagnosis atau menangani suatu penyakit, serta untuk membantu pelaksanaan prosedur medis lainnya, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis distinctio quasi libero!
          </p>
          <ul style="list-style: none">
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
          </ul>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
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

      <div class="row portfolio-container mb-5">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <a href=""><div class="portfolio-wrap">
            <img src="img/penunjang/Rontgen PANORAMIC 2_ppt.jpg" class="img-fluid" alt="">
          </div></a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <a href=""><div class="portfolio-wrap">
            <img src="img/penunjang/CT Scan_ppt.jpg" class="img-fluid" alt="">
          </div></a>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <a href=""><div class="portfolio-wrap">
              <img src="img/penunjang/X-Ray Konvensional.jpg" class="img-fluid" alt="">
            </div></a>
          </div>


      </div>

    </div>
@endsection