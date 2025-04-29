@extends('layouts.main')
@section('content')
@section('title','Radiologi')
@section('judul','Radiologi')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        <div class="col-4">
            <img src="img/penunjang/Rontgen PANORAMIC 2_ppt.jpg" alt="..." style="width: 400px; height: 400px;">
        </div>
        <div class="col-8">
          <h3 class="fw-bold">Layanan X-RAY PANORAMIC & CEPHALOMETRY (by KAVO OP 3D Finlandia)</h3>
          <p>Pemeriksaan X-Ray Panoramic adalah pemeriksaan penunjang yang digunakan dalam kedokteran gigi berupa bentuk foto Rontgen. Pemeriksaan gigi ini bertujuan untuk melihat lebih jauh dan jelas gambaran gigi dan jaringan lunak yang ada di sekitarnya.
          </p>
          <p>Pemeriksaan X-Ray Cephalometry adalah salah satu teknik pencitraan untuk memotret bagian gigi dan kepala. Prosedur Ini biasa dilakukan untuk kepentingan perawatan seperti pasangan kawat gigi atau behel, mendiagnosis gangguan pada tulang wajah, dan penyakit sendi rahang.</p>
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