@extends('layouts.main')
@section('content')
@section('title','Farmasi')
@section('judul','Farmasi')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        <div class="col-4">
            <img src="img/farmasi/Informasi compress.jpg" alt="..." style="width: 400px; height: 400px;">
        </div>
        <div class="col-8">
          <h3 class="fw-bold">Visite Apoteker</h3>
          <p>Visite Apoteker merupakan kegiatan kunjungan ke pasien rawat inap yang dilakuakan Apoteker secara mandiri atau bersama tim tenaga kesehatan untuk mengamati kondisi klinis pasien secara langsung, dan mengkaji masalah terkait obat, memantau terapi obat dan reaksi obat yang tidak dikehendaki, meningkatkan terapi obat yang rasional, dan menyajikan informasi obat kepada dokter, pasien serta profesional kesehatan lainnya.
          </p>
          
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