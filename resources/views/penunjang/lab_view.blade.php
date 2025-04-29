@extends('layouts.main')
@section('content')
@section('title','Laboratorium | Hematologi')
@section('judul','Laboratorium')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        <div class="col-4">
            <img src="/img/penunjang/{{ $penunjang->gambar }}" alt="..." style="width: 400px; height: 400px;">
        </div>
        <div class="col-8">
          <h3 class="fw-bold">{{ $penunjang->layanan_p }}</h3>
          <p>{{ $penunjang->keterangan }}</p>
          <ul>
          @foreach ($layanan as $lay)
              <li><i class="ri-check-double-line"></i>{{ $lay }}</li>
          @endforeach
          </ul>
          
          <ul style="list-style: none">
            <li><i class="ri-check-double-line"></i>{{ $penunjang->p1 }}</li>
            <li><i class="ri-check-double-line"></i>{{ $penunjang->p2 }}</li>
            <li><i class="ri-check-double-line"></i>{{ $penunjang->p3 }}</li>
            <li><i class="ri-check-double-line"></i>{{ $penunjang->p4 }}</li>
            <li><i class="ri-check-double-line"></i>{{ $penunjang->p5 }}</li>
            <li><i class="ri-check-double-line"></i>{{ $penunjang->p6 }}</li>
            <li><i class="ri-check-double-line"></i>{{ $penunjang->p7 }}</li>
            <li><i class="ri-check-double-line"></i>{{ $penunjang->p8 }}</li>
            <li>{{ $penunjang->p9 }}</li>
            <li>{{ $penunjang->p10 }}</li>
          </ul>
        </div>
    </div>
  </div>
</section><!-- End Biodata -->
@endsection