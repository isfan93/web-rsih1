@extends('layouts.main')
@section('content')
@section('title','Radiologi')
@section('judul','Radiologi')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        <div class="col-4">
            <img src="/img/penunjang/{{ $raddetail->gambar }}" alt="..." style="width: 400px; height: 400px;">
        </div>
        <div class="col-8">
          <h3 class="fw-bold">{{ $raddetail->keterangan }}</h3>
          
          @foreach ($ket as $keterangan)
            <p>{{ $keterangan }}</p>    
          @endforeach
        </div>
    </div>

    @if ($raddetail->layanan_p == 'Ct-Scan')
      <div class="row">
        <div class="col">
          <div class="card">
            {{-- <div class="card-title">
              <h5>Jenis Pemeriksaan CT-Scan</h5>
            </div> --}}
            <div class="card-body">
              <table class="table table-hover table-sm text-center">
                <h5>Jenis Pemeriksaan CT-Scan</h5>
                <tr style="background-color: rgb(54, 211, 172); color: white">
                  <th>No</th>
                  <th>Jenis Pelayanan CT-Scan</th>
                </tr>
                @foreach ($ctsc as $ct)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $ct->tindakan }}</td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    @endif
  </div>
</section><!-- End Biodata -->
@endsection