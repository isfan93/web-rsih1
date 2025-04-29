@extends('layouts.main')
@section('content')
@section('title','Farmasi')
@section('judul','Farmasi')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        <div class="col-4">
            <img src="img/farmasi/Informasi farmasi rajal compress.jpg" alt="..." style="width: 400px; height: 400px;">
        </div>
        <div class="col-8">
          <h3 class="fw-bold">Pelayanan Informasi Obat</h3>
          <p>PIO adalah pemberian Informasi tentang obat dari apoteket atau asisten teknis apoteker khususnya kepada pasien & keluarga pasien, Serta umumnya kepada sejawat medis maupun paramedis meliputi Indikasí , aturan pemakaian, lama pemakaian, cara pemakaian penyimpanan, monitoring & waspada efek samping obat, dan Interaksi obat</p>
          <p>Waktu tunggu pelayanan resep adalah tenggang waktu mulai pasien meneyerahkan resep kepada petugas farmasi hingga obat di serahkan , menurut PMK No 129/Menkes/SK/II/2008 tentang standar pelayanan minimal di rumah sakit waktu tunggu pelayanan resep racikan 60 menit dan waktu tunggu pelayanan non racikan 30 menit 
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