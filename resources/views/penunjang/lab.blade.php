@extends('layouts.main')
@section('content')
@section('title','Laboratorium')
@section('judul','Laboratorium')
    
    <div class="container">
      <div class="row content">
        {{-- <div class="col-lg-6">
          <img src="img/foto-poli/X-Ray Konvensional.jpg" alt="" style="width: 100%">
        </div> --}}
        <div class="col-lg-12">
          <p class="text-justify">
            Pelayanan 7 hari 24 jam seminggu, untuk pasien yang akan melakukan pemeriksaan laboratorium pukul 07:30-15:30 dapat langsung melakukan registrasi di bagian “Administrasi radiologi & Laboratorium”, sedangkan untuk pasien yang akan melakukan pemeriksaan laboratorium pukul 15:30-07:30 dapat langsung melakukan registrasi di Ruang Laboratorium.
          </p>
          <p>
            Pelayanan Laboratorium di Rumah Sakit Intan Husada selain dilengkapi dengan peralatan pemeriksaan yang canggih dan terbaru, juga didukung oleh tenaga ahli yang kompeten, diantaranya dokter spesialis patologi klinik dan analis yang profesional di bidangnya.
          </p>
          <p>
            Pelayanan laboratorium merupakan Pelayanan Penunjang yang membantu dokter dalam menegakan diagnosis.
          </p>
          <div class="row">
            <div class="col-6">
              <ul style="list-style: none">
                <li><i class="ri-check-double-line"></i> 1.	Pelayanan Hematologi </li>
                <li><i class="ri-check-double-line"></i> 2.	Pelayanan Kimia Klinik</li>
                <li><i class="ri-check-double-line"></i> 3.	Pelayanan Imunoserologi</li>
              </ul>
            </div>
            <div class="col-6">
              <ul style="list-style: none">
                <li><i class="ri-check-double-line"></i> 4.	Pelayanan Urinalisia </li>
                <li><i class="ri-check-double-line"></i> 5.	Laboratorium Patologi Anatomi & Laboratorium Mikrobiologi </li>
                <li><i class="ri-check-double-line"></i> 6.	Pelayanan produk darah</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  
    </div>

    <div class="container">

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <h1>Fasilitas</h1>
        </div>
      </div>
      <br>

      <div class="row portfolio-container">

        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/1. Lab 001 copy quatron m1.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Hematologi</h5>
              <a href="/penunjang_detail/lab1" class="btn btn-sm btn-success" style="margin: auto auto; background-color: rgb(0, 198, 155)">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/2. Laboratorium 2023.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Kimia Klinik</h5>
              <a href="/penunjang_detail/lab1" class="btn btn-sm btn-success" style="margin: auto auto; background-color: rgb(0, 198, 155)">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/3. Lab 002 copy ichroma.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Imunoserologi</h5>
              <a href="/penunjang_detail/lab1" class="btn btn-sm btn-success" style="margin: auto auto; background-color: rgb(0, 198, 155)">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/4. Lab 004 copy mision.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Urinalisa</h5>
              <a href="/penunjang_detail/lab1" class="btn btn-sm btn-success" style="margin: auto auto; background-color: rgb(0, 198, 155)">Lihat Detail</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/6. hand-holding-bag-blood.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">Produk Darah</h5>
              <a href="/penunjang_detail/lab1" class="btn btn-sm btn-success" style="margin: auto auto; background-color: rgb(0, 198, 155)">Lihat Detail</a>
            </div>
          </div>
        </div> --}}

        @foreach ($lab as $l)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/{{ $l->gambar }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold">{{ $l->layanan_p }}</h5>
              <a href="/penunjang_detail/{{ $l->id }}" class="btn btn-sm btn-success" style="margin: auto auto; background-color: rgb(0, 198, 155)">Lihat Detail</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      
    </div>

   
    <div class="container">
      <hr>
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <h1>Pemantapan Mutu Laboratorium</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p>- Pemantapan mutu laboratorium terbagi atas pemantapan mutu internal dan pemantapan mutu eksternal.</p>
          <p>- Pemantapan mutu internal dilaksanakan oleh setiap laboratorium berupa laporan harian </p>
          <p>- Pemantapan mutu eksternal berupa jaminan mutu atau sertifikat kalibrasi dan sertifikat eksternal dari luar.</p>
        </div>
      </div>
      <div class="row">
        <h4 class="biodata">Sertifikat Eksternal</h4>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/sertfikat_eksternal3.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/sertfikat_eksternal2.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/sertfikat_eksternal3.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <h4 class="biodata">Sertifikat Kalibrasi</h4>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_001.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_002.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_003.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_004.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_005.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_006.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_007.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_008.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_009.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_010.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_011.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app mt-2 mb-5">  
          <div class="card h-100">
            <img src="img/penunjang/sertifikat/CALIBRATION & TESTING OF MEDICAL EQUIPMENT_012.png" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title fw-bold"></h5>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
@endsection