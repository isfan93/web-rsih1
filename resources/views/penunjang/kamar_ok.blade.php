@extends('layouts.main')
@section('content')
@section('title','Kamar OK')
@section('judul','Ruang Operasi (OK)')
    
<section id="about" class="about">
    <div class="container">
      <div class="row content">
        <div class="col-lg-6">
          <img src="img/okvk/bedah.jpg" alt="" style="width: 100%">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          {{-- <p>
            <span class="fw-bold">Ruang Operasi adalah</span> ruangan khusus pembedahan yang memberikan pelayanan berkualitas kepada pasien saat sebelum, selama, dan sesaat sesudah dilakukan tindakan pembedahan
          </p> --}}
          <p><span class="fw-bold"> 1. Ruang Persiapan Pasien </span><br>
            Ruang persiapan pasien adalah ruangan yang digunakan untuk mempersiapkan pasien bedah sebelum memasuki ruang operasi, di ruang ini petugas rumah sakit diwajibkan mengganti pakaian pasien dengan pakaian khusus ruang operasi. 
          </p>
          <p><span class="fw-bold"> 2. Ruang Operasi </span><br>
            Ruang Operasi adalah ruangan khusus pembedahan yang memberikan pelayanan berkualitas kepada pasien saat sebelum, selama, dan sesaat sesudah dilakukan tindakan pembedahan
          </p>
          <p><span class="fw-bold"> 3. Ruang Pemulihan </span><br>
            Ruang pemulihan atau Recovery Room (RR) adalah ruangan tempat pengawasan dan pengelolaan secara ketat pada pasien yang baru saja menjalani operasi sampai dengan keadaan umum stabil. Observasi di ruangan pemulihan ± 30-60 menit tergantung keadaan umum pasien. 
          </p>
          <p><span class="fw-bold"> 4. Ruang Resusitasi</span><br>
            Ruang Resusitasi adalah Ruangan untuk melakukan tindakan resusitasi kepada siapa pun yang membutuhkannya, termasuk bayi baru lahir. Saat dilahirkan, bayi memasuki masa transisi untuk mampu bernapas sendiri. Namun, ada beberapa kondisi yang menyebabkan bayi kesulitan bernapas sehingga memerlukan tindakan resusitasi.
          </p>
        </div>
      </div>
      {{-- <br>
      <div class="row">
        <div class="col-lg-12">
          <p><span class="fw-bold">2. Pelayanan Klinis</span></p>
          <p></p>
        </div>
      </div> --}}
    </div>
  </section>

  <!-- ======= Portfolio Section ======= -->
  <section id="layanan" class="portfolio">
    <div class="container">
{{-- 
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <h1>Galeri</h1>
        </div>
      </div>
      <br> --}}

      <div class="row portfolio-container">

        <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
          <div class="card h-100">
            <img src="img/okvk/Ruang Persiapan copy.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Ruang Persiapan</h5>
              <p class="card-text"></p>
              {{-- <a href="/farmasi_detail2" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a> --}}
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
          <div class="card h-100">
            <img src="img/okvk/Ruang OK copy.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Ruang Operasi</h5>
              <p class="card-text"></p>
              {{-- <a href="/farmasi_detail2" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a> --}}
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
          <div class="card h-100">
            <img src="img/okvk/recovery room OK copy.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Ruang Pemulihan</h5>
              <p class="card-text"></p>
              {{-- <a href="/farmasi_detail3" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a> --}}
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app mt-2">  
          <div class="card h-100">
            <img src="img/okvk/Resusitasi room OK copy.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Ruang Resusitasi</h5>
              <p class="card-text"></p>
              {{-- <a href="/farmasi_detail1" class="btn btn-sm btn-success" style="margin: auto auto">Lihat Detail</a> --}}
            </div>
          </div>
        </div>

        

      </div>

    </div>
  </section><!-- End Portfolio Section -->
@endsection