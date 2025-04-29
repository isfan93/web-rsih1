@extends('layouts.main')
@section('content')
@section('title','GIZI')
@section('judul','Gizi')

      
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        {{-- <img src="img/gizi troli.jpg" style="width: 100%;" alt=""> --}}
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4><a href="/poli/22">Gizi Klinik</a></h4>
              <p>Pelayanan Gizi klinik adalah rangkaian kegiatan  pelayanan gizi klinik  di Rawat inap dan Rawat Jalan yang terdiri dari Proses Asuhan Gizi Terstandar (PAGT).
              <p>Pasien akan dilakukan visit oleh ahli gizi dan di konsultasikan ke dokter ahli gizi</p>
              </p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-card-checklist"></i>
              <h4><a href="/giziproduksi">Gizi Produksi</a></h4>
              <p>Pelayanan Gizi Produksi adalah kegiatan penyelenggaraan makanan pasien rawat inap yang dikelola  Unit Gizi sesuai fungsi manajemen yang dianut dan mengacu pada pedoman  pelayanan gizi rumah sakit dan standar  prosedur yang ditetapkan.</p>
            </div>
          </div>
        </div>
        <h3 class="biodata mt-3">Pilihan menu khusus untuk pasien kelas utama, vip, vvip (dengan diet normal)</h3>
      </div>
    </section><!-- End Services Section -->

    
<div class="container">
  <div class="card px-2 py-2">
  <h4 class="text-center">Jadwal Menu</h4>
  <div class="row">
  <div class="col">
    <table class="table table-stripped table-bordered table-sm table-hover mt-2 text-center">
      <thead class="btn-custom">
          <tr>
              <th>Watu</th>
              <th>Senin</th>
              <th>Selasa</th>
              <th>Rabu</th>
              <th>Kamis</th>
              <th>Jumat</th>
              <th>Sabtu</th>
              <th>Minggu</th>
          </tr>
      </thead>
       <tbody>
          <tr>
              <td  style="background-color: rgba(105, 105, 105, 0.263)">Pagi</td>
              <td>Sandwitch Susu (Western)</td>
              <td>Nasi Hainan (Oriental)</td>
              <td>Chicken Katsu (Oriental)</td>
              <td>Nasi Gulung Nori (Oriental)</td>
              <td>Mix Fruit Oat + Telur Rebus (Western)</td>
              <td>Spagheti Bolognaise (Western)</td>
              <td>Chicken Wings (Western)</td>
            </tr>
          <tr>
            <td  style="background-color: rgba(105, 105, 105, 0.263)">Siang</td>
              <td>Chicken Cordon Bleu (Western)</td>
              <td>Kakap Asam Manis (Oriental)</td>
              <td>Beef Stroganof (Western)</td>
              <td>Chicken Bulgogi (Oriental)</td>
              <td>Chicken Teriyaki  (Oriental)</td>
              <td>Beef Steak (Western)</td>
              <td>Scramble Egg (Western)</td>
          </tr>
          <tr>
            <td  style="background-color: rgba(105, 105, 105, 0.263)">Sore</td>
              <td>Chicken Parmigiana (Western)</td>
              <td>Chicken Kung Pao (Oriental)</td>
              <td>Fish With Butter Sauce (Western)</td>
              <td>Spanish Omelette (Western)</td>
              <td>Beef Black Papper  (Western)</td>
              <td>Scotch Egg (Western)</td>
              <td>Chicken Rolade (Western)</td>
          </tr>
      </tbody>
      </table>
    </div>
  </div>
  </div>
  </div>

  <div class="container">
    <div class="row mb-5">
      <div class="section-title mt-5">
        <h1 class="biodata mt-2">Menu Untuk Pasien RSIH</h1>
      </div>
      @foreach ($gizi as $gz)
      <div class="col-lg-2 col-md-6 portfolio-item filter-app mt-2">  
        <div class="card h-100" style="height: 200px; width:200px; box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px; ">
          <div class="card-body">
            <div class=""><img src="img/menu gizi/{{ $gz->gambar }}" class="img-fluid" alt=""></div>
          </div>
          <card class="card-title fw-bold text-center">
            <p>{{ $gz->nama_menu }}</p>
          </card>
        </div>
      </div>
      @endforeach
    </div>
  </div>


@endsection