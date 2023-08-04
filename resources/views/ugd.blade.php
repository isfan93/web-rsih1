@extends('layouts.main')
@section('content')
@section('title','UGD')
@section('judul','Unit Gawat Darurat')

<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
        <img src="img/igd.jpg" alt="" style="width: 100%">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" style="text-align: justify">
        <p>
          <span class="fw-bold">Unit Gawat Darurat</span> adalah unit pelayanan di Rumah Sakit Intan Husada yang dapat menangani kasus gawat darurat segala usia, mulai anak hingga dewasa. Berbagai tindakan gawat darurat, mulai dari pengelolaan fungsi vital (jalan napas, pernapasan, dan peredaran darah), penanganan kasus kecelakaan, dan kegawatdaruratan medis lainnya. 
        </p>
          <hr>
          <p>
            <span class="fw-bold">Pasien akan ditempatkan di  </span> ruangan yang sesuai dengan tingkat keparahan masalahnya dan dilayani secara optimal sesuai keluhan.
          </p>
          <hr>
          <p>
            <span class="fw-bold">UGD RSIH</span> melayani pasien dengan Sistem “ TRIASE” , yaitu pemilahan pasien berdasarkan Tingkat Kegawatan dan Kedaruratan
          </p>
          <hr>
          <p>

          </p>
        
      </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <h3>TRIASE UGD</h3>
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/rawat inap/triasemerah.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Label Merah (Prioritas 1)</h5>
            <p class="card-text">Pasien Gawat Darurat Prioritas Utama Pelayanan True Emegency (Dengan Segera) di Ruang Resusitasi Bed 1, 2, 7 Isolasi. Contohnya: Henti nafas/jantung dan penurunan kesadaran.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/rawat inap/triasekuning.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Label Kuning (Prioritas 2)</h5>
            <p class="card-text">Pasien Darurat Tapi Tidak Gawat Pelayanan dapat ditunda (Akan ditindaklanjuti < 5 menit) di Ruang Tindakan Bedah/ Non Bedah. Contohnya: Patah tulang besar dan luka bakar luas</p></div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/rawat inap/triasehijau.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Label Hijau (Prioritas 3) </h5>
            <p class="card-text">Pasien Tidak Gawat & Tidak Darurat False Emegency (Akan ditindaklanjuti < 15 menit) Bisa rawat jalan di Ruang Pemeriksaan Bed 5, 6. Contohnya: Demam, batuk, pilek, sakit gigi dan mual.</p></div>
        </div>
      </div>
    </div>

    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="img/rawat inap/triasehitam.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Label Hitam (Prioritas 0)</h5>
            <p class="card-text">Pasien Darurat Tapi Tidak Gawat Pelayanan dapat ditunda (Akan ditindaklanjuti < 5 menit) di Ruang Tindakan Bedah/ Non Bedah. Contohnya: Patah tulang besar dan luka bakar luas</p></div>
        </div>
      </div>
    </div>
    <hr>
    <h5 class="fw-bold">Fasilitas</h5>
        <div class="row">
          <div class="col-6">
            <ul>
              <li><i class="ri-check-double-line"></i> 2 Triase Merah</li>
              <li><i class="ri-check-double-line"></i> 2 Triase Kuning</li>
              <li><i class="ri-check-double-line"></i> 2 Triase Hijau</li>
              <li><i class="ri-check-double-line"></i> 1 Ruang Isolasi</li>
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li><i class="ri-check-double-line"></i> 1 Ruang Transit Jenazah</li>
              <li><i class="ri-check-double-line"></i> 1 Ambulans Emergency</li>
              <li><i class="ri-check-double-line"></i> 1 Ambulans Transport</li>
            </ul>
          </div>
          <hr>
  </div>
</section>


{{-- 
<section>
  <div class="container">
    <div class="row">
    <h3>TRIASE UGD</h3>
    <div class="card-group">
      <div class="col">
      <div class="card">
        <img class="card-img-top" src="img/ambulance.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Ambulance Emergency</h5>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img class="card-img-top" src="img/igd.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Instalasi IGD</h5>
        </div>
      </div>    
    </div>    
    <div class="col">
      <div class="card">
        <img class="card-img-top" src="img/igd.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Instalasi IGD</h5>
        </div>
      </div>    
    </div> 
    <div class="col">
      <div class="card">
        <img class="card-img-top" src="img/igd.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Instalasi IGD</h5>
        </div>
      </div>    
    </div> 
    
    </div>
  </div>
  </div>
</section> --}}

<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2></h2>
      <p>Dokter Jaga UGD</p>
    </div>
    
    <div class="row">
      @php
      use App\Models\Dokter;
      $doks = Dokter::where('poli_id','=',1)->get();
      $dokters = $doks;
    @endphp
    @foreach ($dokters as $dok)
    <div class="col-lg-6 mt-4 mt-lg-0">
      <br>
      <div class="member d-flex align-items-start">
        <div class="pic"><img src="/img/foto dokter/{{ $dok->foto }}" class="img-fluid" alt=""></div>
        <div class="member-info">
          {{-- <p class="biodata">Biodata</p> --}}
          <div class="datap">
          <h4>{{ $dok->nama_dok }}</h4>
          <h5>{{ $dok->keahlian }}</h5>
          <div>
            <a href="/dokter_profile/{{ $dok->id }}" class="btn btn-sm btn-primary mt-5">Detail Dokter</a>
           </div>
        </div>
        </div>
      </div>
    </div>


      {{-- modal Detail Dokter --}}
      <div class="modal fade" id="detaildok_b{{ $dok->id }}" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            {{-- <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $d->nama_dok }}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
            <div class="modal-body">
                <div class="row">
                <div class="col">
                    <img class="mx-auto d-block" src="/img/foto dokter/{{ $dok->foto }}" style="border-radius: 5px" width="60%" alt="">
                    <div class="biodok">
                        <h2>{{ $dok->nama_dok }}</h2>
                        <h3>{{ $dok->keahlian }}</h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>{{ $dok->ttl }}</li>
                                <li>{{ $dok->pendidikan }}</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>{{ $dok->email }}</li>
                                <li>4</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                </div>
                <br>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            </div>
        </div>
        </div>
    </div>
    {{-- endmodal --}}

    @endforeach

{{-- 
      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="/img/foto dokter/Adhitya Purnama Putra.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <p class="biodata">Biodata</p>
            <div class="datap">
            <h4>dr. Adhitya Purnama Putra</h4>
            <h5>Dokter Umum</h5>
            <div class="data">
            <p>Tempat Tanggal Lahir : Garut, 1 Oktober 1990</p>
            <p>Email : dhit_fkup08@gmail.com</p>
            </div>
            <div class="social text-center">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="/img/foto dokter/Adhitya Purnama Putra.png" class="img-fluid" alt=""></div>
          <div class="member-info">
            <p class="biodata">Biodata</p>
            <div class="datap">
            <h4>dr. Adhitya Purnama Putra</h4>
            <h5>Dokter Umum</h5>
            <div class="data">
            <p>Tempat Tanggal Lahir : Garut, 1 Oktober 1990</p>
            <p>Email : dhit_fkup08@gmail.com</p>
            </div>
            <div class="social text-center">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
          </div>
        </div>
      </div> --}}

    </div>
    </div>
  
  </div>
</section><!-- End Biodata -->
@endsection