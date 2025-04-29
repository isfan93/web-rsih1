@extends('layouts.main')
@section('content')
@section('title','Farmasi')
@section('judul','Farmasi')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        <div class="col-4">
            <img src="img/farmasi/far3.jpg" alt="..." style="width: 400px; height: 400px;">
        </div>
        <div class="col-8">
          <h3 class="fw-bold">Peracikan Obat Steril</h3>
          <p>Laminar Air Flow sering disebut juga sebagai Biological Safety Cabinet (BSC) yaitu suatu meja kerja yang dirancang untuk menyediakan aliran udara yang bersih, konsisten, dan non turbulen di dalam sutu ruanga tertutup dan menggunakan filter khusus (HEPA atau ULPA) untuk menyaring partikel-partikel udara yang berbahaya atau kontaminan lainnya, udara yang telah disaring kemudian dilekuarkan dalam aliran yang sejajar atau laminar, bergerak dengan kecepatan tetap dan arah yang konsisten 
          </p>

          <p>Jenis Sediaan Racikan Steril</p>
          <ul>
            <li>1. Sitotastika</li>
            <li>2. Injeksi/suntik</li>
            <li>3. Nutrisi Parental</li>
          </ul>
          
          {{-- <ul style="list-style: none">
            <li>{{ $penunjang->p1 }}</li>
            <li>{{ $penunjang->p2 }}</li>
            <li>{{ $penunjang->p3 }}</li>
            <li>{{ $penunjang->p4 }}</li>
            <li>{{ $penunjang->p5 }}</li>
            <li>{{ $penunjang->p6 }}</li>
            <li>{{ $penunjang->p7 }}</li>
            <li>{{ $penunjang->p8 }}</li>
            <li>{{ $penunjang->p9 }}</li>
            <li>{{ $penunjang->p10 }}</li>
          </ul> --}}
        </div>
    </div>
  </div>
</section><!-- End Biodata -->
@endsection