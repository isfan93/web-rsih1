@extends('layouts.main')
@section('content')
@section('title','REKANAN DAN MITRA')
<!-- ======= Breadcrumbs ======= -->
@section('judul','Rekanan dan Mitra')


<div class="container">
  <div class="col-lg-12 mt-4 mt-lg-0">
    {{-- <h3>Rekanan Asuransi dan Perusahaan </h3> --}}
      <h3>Rumah Sakit Intan Husada telah bekerja sama dengan : </h3>
  </div>
  <div class="row">
    <div class="section-title mt-5">
    </div>
    @php
      use App\Models\Rekanan;
      $rekanan = Rekanan::all();
      $rek = $rekanan;
    @endphp
    @foreach ($rek as $r)
    
    <div class="col-lg-2 col-md-6 portfolio-item filter-app mt-2">  
      <div class="card h-100" style="height: 200px; width:200px; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; ">
        <div class="card-body">
          <div class=""><img src="/img/rekanan/{{ $r->logo }}" class="img-fluid" alt=""></div>
        </div>
      </div>
    </div>

    {{-- <div class="col-lg-2">
      <div class="card text-center mb-3" style="height: 200px; width:200px; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; ">
        <div class="card-body">
          <div class=""><img src="/img/rekanan/{{ $r->logo }}" class="img-fluid" alt=""></div>
        </div>
      </div>
    </div> --}}
    @endforeach
    
  </div>

  {{-- <div>
    <img src="img/rekanan dan mitra.jpg" alt="" style="width: 100%">
  </div> --}}
</div>
 
@endsection