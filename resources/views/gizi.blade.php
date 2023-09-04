@extends('layouts.main')
@section('content')
@section('title','GIZI')
@section('judul','Gizi')

      
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="#">Gizi Klinik</a></h4>
              <p>Pelayanan Gizi klinik adalah rangkaian kegiatan  pelayanan gizi klinik  di Rawat inap dan Rawat Jalan yang terdiri dari Proses Asuhan Gizi Terstandar (PAGT).
              <br>
              <br>
              <br>
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="#">Gizi Produksi</a></h4>
              <p>Pelayanan Gizi Produksi adalah kegiatan penyelenggaraan makanan pasien rawat inap yang dikelola  Unit Gizi sesuai fungsi manajemen yang dianut dan mengacu pada pedoman  pelayanan gizi rumah sakit dan standar  prosedur yang ditetapkan.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <div class="container">
      <h1 class="biodata">Daftar Menu Rawat Inap</h1>
      <div class="row">
        @foreach ($gizi as $gz)
        <div class="col-4 mt-2 mb-2">
          <img src="img/menu gizi/{{ $gz->gambar }}" class="img-fluid" alt="">
        </div>
        @endforeach
      </div>
    </div>

@endsection