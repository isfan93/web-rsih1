@extends('layouts.main')
@section('content')
@section('title','PROFILE DOKTER')
@section('judul','Profile Dokter')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        <div class="col-4">
            <img src="/img/foto dokter/{{ $dokprof->foto }}" alt="..." style="width: 400px; height: 400px;">
        </div>
        <div class="col-8">
          <h1 class="fw-bold">{{ $dokprof->nama_dok }}</h1>
          <h4>{{ $dokprof->keahlian }}</h4>
          <hr>
          <h3 class="fw-bold">Pendidikan</h3>
          <p>{{ $dokprof->pendidikan }}</p>
          <h3 class="fw-bold">Seminar dan Workshop</h3>
          <p>{{ $dokprof->pelatihan }}</p>
        </div>
    </div>
  </div>
</section><!-- End Biodata -->


@php
use App\Models\Dokter;
$dokter = Dokter::where('id','=', $dokprof->id)->get();
@endphp
<div class="container">
<div class="card px-2 py-2">
<h4 class="text-center">Jadwal Dokter</h4>
<div class="row">
<div class="col">
  <table class="table table-stripped table-bordered table-sm table-hover mt-2 text-center">
    <thead class="btn-custom">
        <tr>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jumat</th>
            <th>Sabtu</th>
            <th>Minggu</th>
        </tr>
    </thead>
    @foreach ($dokter as $d)
    <tbody class="fw-bold">
        <tr>
            @foreach ($d->jadwal as $jd)
            <td>{{ $jd->senin }}</td>
            <td>{{ $jd->selasa }}</td>
            <td>{{ $jd->rabu }}</td>
            <td>{{ $jd->kamis }}</td>
            <td>{{ $jd->jumat }}</td>
            <td>{{ $jd->sabtu }}</td>
            <td>{{ $jd->minggu }}</td>
            @endforeach
        </tr>
    </tbody>
    @endforeach
    </table>
  </div>
</div>
</div>
</div>

@endsection