@extends('layouts.main')
@section('content')
@section('title','Radiologi')
@section('judul','Radiologi')
    
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-title text-center text-white" style="background-color: #04af8a">
          <h2>Alur Pasien Rujukan luar</h2>
        </div>
        <div class="card-body">
          <a href="img/penunjang/alur1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="img/penunjang/alur1.jpg" class="img-fluid" alt="" style="width: 100%"></a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-title text-center text-white" style="background-color: #04af8a">
          <h2>Alur Pasien Poliklinik</h2>
        </div>
        <div class="card-body">
          <a href="img/penunjang/alur2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="img/penunjang/alur2.jpg" class="img-fluid" alt="" style="width: 100%"></a>
          {{-- <img src="img/penunjang/alur2.jpg" alt="" style="width: 100%"> --}}
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-title text-center text-white" style="background-color: #04af8a">
          {{-- <h2>Alur Pasien Rujukan luar</h2> --}}
        </div>
        <div class="card-body">
          <a href="img/penunjang/alur3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="img/penunjang/alur3.jpg" class="img-fluid" alt="" style="width: 100%"></a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-title text-center text-white" style="background-color: #04af8a">
          {{-- <h2>Alur Pasien Poliklinik</h2> --}}
        </div>
        <div class="card-body">
          <a href="img/penunjang/alur4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="img/penunjang/alur4.jpg" class="img-fluid" alt="" style="width: 100%"></a>
          {{-- <img src="img/penunjang/alur2.jpg" alt="" style="width: 100%"> --}}
        </div>
      </div>
    </div>
  </div>






  <div class="row portfolio-container mt-5">

    {{-- @foreach ($rad as $r)
    <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
      <div class="card h-100">
        <img src="img/penunjang/{{ $r->gambar }}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">{{ $r->layanan_p }}</h5>
          <a href="/rad_detail/{{ $r->id }}" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
        </div>
      </div>
    </div>
    @endforeach --}}

    <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
      <div class="card h-100">
        <img src="img/penunjang/Rontgen PANORAMIC 2_ppt.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Panoramic</h5>
          <a href="/rad_detail1" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
      <div class="card h-100">
        <img src="img/penunjang/CT Scan_ppt.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">CT SCAN</h5>
          <a href="/rad_detail2" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
      <div class="card h-100">
        <img src="img/penunjang/X-Ray Konvensional.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">X-Ray Konvensional</h5>
          <a href="/rad_detail3" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
      <div class="card h-100">
        <img src="img/penunjang/ECHOcardiography.jpg" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">USG</h5>
          <a href="/rad_detail4" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a>
        </div>
      </div>
    </div>

  </div>
</div>





      {{-- <div class="container">
        <div class="row content">
          <div class="col-lg-12">
            <p class="text-justify">
              Radiologi adalah Prosedur medis yang dapat dilakukan untuk mendiagnosis atau menangani suatu penyakit, serta untuk membantu pelaksanaan prosedur medis lainnya, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis distinctio quasi libero!
            </p>
          </div>
          </div>
        </div>
      </div> --}}

@endsection