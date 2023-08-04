@extends('layouts.main')
@section('content')
@section('title','DOKTER')
@section('judul','TIM DOKTER')


<section id="about" class="about">
  <div class="container">

        <form action="{{ route('dokter') }}" method="get">
          <div class="row mx-auto">
            <div class="col-6">
              <input name="search" type="search" class="form-control form-control-sm" placeholder="Cari Dokter">
            </div>
            <div class="col-6">
              <button type="submit" class="btn btn-danger btn-sm mb-3"><i class="fa fa-search"></i>Cari</button>
            </div>
          </div>
        </form>

    <div class="row">
      @foreach ($dokter as $dok)
      <div class="col-3 mt-2">
        <div class="card h-100">
          <img src="img/foto dokter/{{ $dok->foto }}" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title fw-bold">{{ $dok->nama_dok }}</h5>
            <p class="card-text">{{ $dok->keahlian }}</p>
            <a href="/dokter_profile/{{ $dok->id }}" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Profil</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Biodata -->


@endsection