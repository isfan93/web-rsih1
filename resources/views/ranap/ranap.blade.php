@extends('layouts.main')
@section('content')
@section('title',$ranap->kelas)
@section('judul',$ranap->kelas)
    

<div>
    <img src="\img/rawat inap/{{ $ranap->gambar }}" alt="" style="width: 100%; height: 100%">
</div>
<div class="text-center">
  <div class="container">
      <div class="row d-flex justify-content-center mt-2">
        <div class="col-6 col-md-6">
          <a href="\video/{{ $ranap->video }}" class="btn btn-sm btn-primary biodata" style="margin: auto auto">Lihat Video >> Klik disni !!</a>
        </div>
      </div>
    </div>
</div>
<div class="container">
  <div class="row mt-3 text-center">
    <div class="col-12">
      <h5>Fasilitas</h5>
    </div>
  </div>
  <div class="row pt-2 mt-2" style="background-color: rgb(232, 232, 232); border-radius: 3px">
    <div class="col-6">
      <ul style="list-style: none">
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas1 }}</li>
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas2 }}</li>
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas3 }}</li>
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas4 }}</li>
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas5 }}</li>
      </ul>
    </div>
    <div class="col-6">
      <ul style="list-style: none">
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas6 }}</li>
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas7 }}</li>
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas8 }}</li>
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas9 }}</li>
        <li><i class="ri-check-double-line"></i> {{ $ranap->fas10 }}</li>
      </ul>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-6">
      {{-- <p>Penunggu pasien maksimal 2 orang</p> --}}
    </div>
    <div class="col-6">
      <h3 class="biodata2 pt-2 pb-2"><i class="bi bi-tags-fill"></i> {{ $ranap->harga }}</h3>
    </div>
  </div>


  <div class="row mt-3 mb-2">
    <h3 class="biodata px-2">Layanan Kamar Lainnya</h3>
    @foreach ($ranap_lay as $rl)
      <div class="col-lg-3 col-md-6">
        <div class="box">
          <div class="card h-100 ">
            <img src="\img/rawat inap/{{ $rl->gambar2 }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">{{ $rl->kelas }}</h5>
              <p class="card-text"></p>
              <a href="{{ route('ranap', $rl->id) }}" class="btn btn-sm btn-danger biodata" style="margin: auto auto">Lihat Kelas</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach

  </div>


  
</div>

@endsection