@extends('layouts.main')
@section('content')
@section('title','MCU')
@section('judul','MCU')
    <div class="container">
      <div class="card">
        <div class="card-body">
          <table class="table table-hover table-sm text-center">
            <tr style="background-color: rgb(54, 211, 172); color: white">
              <th>No</th>
              <th>Tipe Paket MCU</th>
              <th>Tarif Personal</th>
              <th>Opsi</th>
            </tr>
            @foreach ($mcu as $m)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $m->paket_mcu }}</td>
              <td>Rp. {{ $m->tarif_personal }}</td>
              <td>
                <a href="#{{ $m->id }}" class="btn btn-sm btn-success">Lihat Detail</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      <h5 class="mt-3 fw-bold">* Untuk tarif corporate bisa menghubungi nomor : 085315999986</h5>
      
        <div class="row content" id="1">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 1 basic.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="2">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 1 paket simpel.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="3">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 1 standar.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="4">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 2 paket lengkap.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="5">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 2 paket pranikah wanita.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="6">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 2 paket pranikah pria.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="7">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 3 (Revisi Fiks) jantung.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="8">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 3 (Revisi Fiks) tumor marker.jpg" alt="" style="width: 100%">
              </div>
            </div>
            <p class="fw-bold px-5" style="color: red">** PSA (tumor prostat)</p>
            <p class="fw-bold px-5" style="color: red">** AFP (kadar tumor dalam hati, ovarium)</p>
            <p class="fw-bold px-5" style="color: red">** CEA (kadar tumor dalam darah)</p>
          </div>          
        </div>

        <div class="row content mt-2" id="9">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 4 Prakerja Basic Wanita.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="10">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 4 Prakerja Basic Pria.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="11">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 4 Prakerja Standar Wanita.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="12">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 4 Prakerja Basic Pria.jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>

        <div class="row content mt-2" id="13">
          <div class="card">
            <div class="card-body">
              <div class="col-lg-12">
                <img src="img/mcu/Price List MCU Umum 2023 page 3 (Revisi Fiks).jpg" alt="" style="width: 100%">
              </div>
            </div>
          </div>          
        </div>
  
    </div>
    
@endsection