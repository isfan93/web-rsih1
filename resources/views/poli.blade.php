@extends('layouts.main')
@section('content')
@section('title','Poliklinik RSIH')
@section('judul','Poliklinik')

  <div class="container">
    <div class="row content">
      <div class="col-lg-6">
          <img src="/img/foto-poli/{{ $poli->gambar }}" alt="..." style="width:100%">
      </div>
      <div class="col-lg-6">
        <h1 class="fw-bold">{{ $poli->nama_poli }}</h1>
        <h5>{{ $poli->keterangan }}</h5>
        <h5>Kondisi yang dapat di tangani {{ $poli->nama_poli }}, diantaranya : </h5>
        <p>{{ $poli->kondisi }}</p>
        {{-- <ul>
          <li>{{ $poli->p1 }}</li>
          <li>{{ $poli->p2 }}</li>
          <li>{{ $poli->p3 }}</li>
          <li>{{ $poli->p4 }}</li>
          <li>{{ $poli->p5 }}</li>
          <li>{{ $poli->p6 }}</li>
          
        </ul> --}}
      </div>
  </div>
  @php
  use App\Models\Dokter;
  $no = 1;
  $dokter = Dokter::where('poli_id','=', $poli->id)->get();
  @endphp

<h1 class="fw-bold mt-5">Dokter {{ $poli->nama_poli }}</h1>
<hr>
<div class="row">
  @foreach($dokter as $dok)
    
  <div class="col-3 mt-2">
    <div class="card h-100">
      <img src="\img/foto dokter/{{ $dok->foto }}" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title fw-bold">{{ $dok->nama_dok }}</h5>
        <p class="card-text">{{ $dok->keahlian }}</p>
        <a href="/dokter_profile/{{ $dok->id }}" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Profil</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
<br>
<div class="card px-2 py-2">
<h4>Jadwal Dokter</h4>
<div class="row">
  <div class="col">
    <table class="table table-stripped table-bordered table-sm table-hover mt-2 text-center">
      <thead class="btn-custom">
          <tr>
              <th>No</th>
              <th>Nama Dokter</th>
              <th>Senin</th>
              <th>Selasa</th>
              <th>Rabu</th>
              <th>Kamis</th>
              <th>Jumat</th>
              <th>Sabtu</th>
              <th>Minggu</th>
          </tr>
      </thead>
      @foreach ($dokter as $d)
      <tbody class="fw-bold">
          <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $d->nama_dok }}</td>
              @foreach ($d->jadwal as $jd)
              <td>{{ $jd->senin }}</td>
              <td>{{ $jd->selasa }}</td>
              <td>{{ $jd->rabu }}</td>
              <td>{{ $jd->kamis }}</td>
              <td>{{ $jd->jumat }}</td>
              <td>{{ $jd->sabtu }}</td>
              <td>{{ $jd->minggu }}</td>
              @endforeach
          </tr>
      </tbody>
      @endforeach
      </table>
    </div>
  </div>
</div>


</div>





@endsection