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
            
            <div class="row">
              <div class="col-md-6">
                <h3>Daftar Dokter Poliklinik </h3>
              </div>
              <div class="col-md-6">
                <form action="/rajal-dokter" method="get">
                  <div class="row">
                    <div class="col-md-8">
                      <input name="search" type="search" class="form-control form-control-sm" placeholder="Masukan Nama Dokter">
                    </div>
                    <div class="col-md-4">
                      <button type="submit" class="btn btn-danger btn-sm mb-3"><i class="fa fa-search"></i>Cari</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <table class="table table-stripped table-bordered table-sm table-hover mt-2 text-center">
                <thead class="btn-custom">
                    <tr>
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Poliklinik</th>
                        <th>Senin</th>
                        <th>Selasa</th>
                        <th>Rabu</th>
                        <th>Kamis</th>
                        <th>Jumat</th>
                        <th>Sabtu</th>
                        <th>Minggu</th>
                        {{-- <th>Opsi</th> --}}
                    </tr>
                      
                  
                </thead>
                @foreach ($dokter as $index => $d)
                <tbody>
                    <tr>
                        <td>{{ $index + $dokter->firstItem() }}</td>
                        <td>{{ $d->nama_dok }}</td>
                        <td>{{ $d->poli->nama_poli ?? 'None' }}</td>

                        @foreach ($d->jadwal as $jd)
                      
                        <td style="font-weight: bold">{{ $jd->senin }}</td>
                        <td style="font-weight: bold">{{ $jd->selasa }}</td>
                        <td style="font-weight: bold">{{ $jd->rabu }}</td>
                        <td style="font-weight: bold">{{ $jd->kamis }}</td>
                        <td style="font-weight: bold">{{ $jd->jumat }}</td>
                        <td style="font-weight: bold">{{ $jd->sabtu }}</td>
                        <td style="font-weight: bold">{{ $jd->minggu }}</td>
                      
                        @endforeach
                        {{-- <td> <img src="img/foto dokter/{{ $d->foto }}" alt=""> </td> --}}
                        {{-- @foreach ($d->jadwal as $jad)
                        <td style="font-weight: bold">{{ $jad->dari_jam }} - {{ $jad->sampai_jam }}</td>
                        @endforeach --}}
                        {{-- <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#jadwal{{ $d->id }}">Lihat jadwal</button></td> --}}
                    </tr>
                </tbody>


                        
                        {{-- modal Detail Dokter --}}
                        <div class="modal fade" id="detaildok{{ $d->id }}" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                {{-- <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $d->nama_dok }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div> --}}
                                <div class="modal-body">
                                    <div class="row">
                                    <div class="col">
                                        <img class="mx-auto d-block" src="/img/foto dokter/{{ $d->foto }}" style="border-radius: 5px" width="60%" alt="">
                                        <div class="biodok">
                                            <h2>{{ $d->nama_dok }}</h2>
                                            <h3>{{ $d->keahlian }}</h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul>
                                                    <li>{{ $d->ttl }}</li>
                                                    <li>{{ $d->pendidikan }}</li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul>
                                                    <li>{{ $d->email }}</li>
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
            </table>
            <br>
            {{ $dokter->links() }}
          </div>
        </div>
      </div>
    </div>
    

    <div class="row">
      <div class="section-title mt-5">
        <h2></h2>
        <p>Daftar Poliklinik</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <form action="#" method="get">
            <div class="row">
              <div class="col-md-8">
                <input name="search" type="search" class="form-control form-control-sm" placeholder="Cari Poliklinik">
              </div>
              <div class="col-md-4">
                <button type="submit" class="btn btn-danger btn-sm mb-3"><i class="fa fa-search"></i>Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      @foreach ($poli as $p)
          
      <div class="col-lg-3">
        <br>
        <div class="member d-flex align-items-start">
          <a href="/poli/{{ $p->id }}"><div class=""><img src="\img/logo-poli/{{ $p->logo }}" class="img-fluid" alt=""></div></a>
          {{-- <a href="" data-bs-toggle="modal" data-bs-target="#poli1{{ $p->id }}"><div class=""><img src="/img/logo-poli/{{ $p->logo }}" class="img-fluid" alt=""></div></a> --}}
        </div>
      </div>

            
        <div class="modal fade modal-xl" id="poli1{{ $p->id }}" data-bs-backdrop="poli11" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $p->nama_poli }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col">
                          <img src="/img/layanan/{{ $p->gambar }}" style="width: 100%; height: 100%;" alt="">
                      </div>
                      <div class="col">
                          <h4>{{ $p->nama_poli }}</h4>
                          <p style="text-align: justify">{{ $p->keterangan }}</p>                          
                          {{-- <a href="" class="" data-bs-toggle="modal" data-bs-target="#gustomo">Detail Dokter</a> --}}
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
      
      @endforeach
    </div>
    <br>
  </div>
</section><!-- End Team Section -->

  {{-- modal lihat jadwal --}}

  <div class="modal fade" id="poli1" data-bs-backdrop="poli11" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

  
  {{-- modal Detail Dokter --}}
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



</main>
@endsection