@extends('layouts.main')
@section('content')
@section('title','RAWAT JALAN')
<main id="main">
  @section('judul','Rawat Jalan')

  
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h3>Daftar Poliklinik </h3>
            <table class="table stripped table-sm table-hover"  style="text-align: center">
              <thead class="btn-custom">
                  <tr>
                      <th>No</th>
                      <th>Nama Poliklinik</th>
                      <th>Jumlah Dokter</th>
                      <th>Lokasi</th>
                      <th>Opsi</th>
                  </tr>
              </thead>
              
              <tbody>
                @foreach ($poli as $jd)
                <tr>
                  <td>{{ $jd->id }}</td>
                  <td><a href="" class="" data-bs-toggle="modal" data-bs-target="#anak{{ $jd->id }}">{{ $jd->nama_poli }}</a></td>
                  <td>{{ $jd->jumlah_dok }}</td>
                  <td>{{ $jd->lokasi }}</td>
                  {{-- <td>{{ $jd->dokter->nama_dok }}</td> --}}
                  <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#poli1{{ $jd->id }}">Lihat jadwal</button></td>
              </tr>
              
                  {{-- modal keterangan Poli --}}
                  <div class="modal fade" id="anak{{ $jd->id }}" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $jd->nama_poli }}</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                              <div class="col-12">
                                <img src="img/layanan/{{ $jd->gambar }}" style="width: 100%" alt="">
                                <br>
                                <p style="text-align: justify">{{ $jd->keterangan }}</p>
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
                  
                    {{-- modal lihat jadwal --}}
                    <div class="modal fade" id="poli1{{ $jd->id }}" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Dokter {{ $jd->nama_poli }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col">
                                      <img src="/img/foto dokter/Gustomo Panantro.png" style="width: 180px; height: 180px;" alt="">
                                  </div>
                                  <div class="col">
                                      <h4>dr. Gustomo</h4>
                                      <p>Senin : Pukul 09.00 - 12.00</p>
                                      <p>Selasa : Pukul 09.00 - 12.00</p>
                                      <a href="" class="" data-bs-toggle="modal" data-bs-target="#gustomo">Detail Dokter</a>
                                  </div>
                              </div>
                              <br>
                              <div class="row">
                                  <div class="col">
                                      <img src="/img/foto dokter/Mustakim.png" style="width: 180px; height: 180px;" alt="">
                                  </div>
                                  <div class="col">
                                      <h4>dr. Mustakim</h4>
                                      <p>Senin : Pukul 09.00 - 12.00</p>
                                      <p>Selasa : Pukul 09.00 - 12.00</p>
                                  </div>
                              </div>
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
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Team Section -->



<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    {{-- <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h3>Daftar Poliklinik Gedung A</h3>
              <table class="table stripped table-sm table-hover">
                <thead class="btn-custom">
                    <tr>
                        <th>No</th>
                        <th>Nama Poliklinik</th>
                        <th>Jumlah Dokter</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="" class="" data-bs-toggle="modal" data-bs-target="#anak">Poli Anak</a></td>
                        <td>2</td>
                        <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#poli1">Lihat jadwal</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Poli Obgyn</td>
                        <td>4</td>
                        <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#poli2">Lihat Jadwal</button></td>
                    </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h3>Daftar Poliklinik Gedung B</h3>
              <table class="table stripped table-sm table-hover">
                <thead class="btn-custom">
                    <tr>
                        <th>No</th>
                        <th>Nama Poliklinik</th>
                        <th>Jumlah Dokter</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Poli Anak</td>
                        <td>2</td>
                        <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#poli1">Lihat jadwal</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Poli Obgyn</td>
                        <td>4</td>
                        <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#poli2">Lihat Jadwal</button></td>
                    </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </section><!-- End Team Section -->

  {{-- modal lihat jadwal --}}

  <div class="modal fade" id="poli1" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Dokter Anak</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <img src="/img/foto dokter/Gustomo Panantro.png" style="width: 180px; height: 180px;" alt="">
                </div>
                <div class="col">
                    <h4>dr. Gustomo</h4>
                    <p>Senin : Pukul 09.00 - 12.00</p>
                    <p>Selasa : Pukul 09.00 - 12.00</p>
                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#gustomo">Detail Dokter</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <img src="/img/foto dokter/Mustakim.png" style="width: 180px; height: 180px;" alt="">
                </div>
                <div class="col">
                    <h4>dr. Mustakim</h4>
                    <p>Senin : Pukul 09.00 - 12.00</p>
                    <p>Selasa : Pukul 09.00 - 12.00</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
        </div>
      </div>
    </div>
  </div>
  

  {{-- endmodal --}}

  {{-- modal keterangan Poli --}}
  <div class="modal fade" id="polib" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Poliklinik Anak</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <img src="img/curry.png" style="border-radius: 5px" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, consectetur.</p>
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

  
  {{-- modal keterangan Poli --}}
  <div class="modal fade" id="gustomo" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Poliklinik Anak</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col">
                <img class="mx-auto d-block" src="/img/foto dokter/Gustomo Panantro.png" style="border-radius: 5px" width="80%" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, consectetur.</p>
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

  {{-- Biodata Dokter --}}
  <section id="team" class="team section-bg">
    <div class="container">
      <div class="section-title">
        <h2></h2>
        <p>Daftar Dokter Rawat Jalan</p>
      </div>
      
      <div class="row">
        @php
        use App\Models\Dokter;
            $q = Dokter::all();
            $doks =  $q;
        @endphp
      {{-- tampil dengan db --}}
      @foreach ($doks as $dok)
      <div class="col-lg-6 mt-4 mt-lg-0">
        <br>
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="/img/foto dokter/{{ $dok->foto }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <p class="biodata">Biodata</p>
            <div class="datap">
            <h4>{{ $dok->nama_dok }}</h4>
            <h5>{{ $dok->keahlian }}</h5>
            <div class="data">
            <p>Tempat Tanggal Lahir : {{ $dok->ttl }}</p>
            <p>Email : {{ $dok->email }}</p>
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
</main>
@endsection