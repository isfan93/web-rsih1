@extends('layouts.main')
@section('content')
@section('title','Radiologi')
@section('judul','Radiologi')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        <div class="col-4">
            <img src="img/penunjang/CT Scan_ppt.jpg" alt="..." style="width: 400px; height: 400px;">
        </div>
        <div class="col-8">
          <h3 class="fw-bold">Layanan CT SCAN 16 Slices (by GE Healthcare From India)</h3>
          <p>CT Scan (Computerized Tomography Scan) adalah prosedur pemeriksaan medis yang menggunakan kombinasi teknologi sinar-X dan sistem komputer khusus untuk menghasilkan gambar organ, tulang, dan jaringan lunak di dalam tubuh.
          </p>
          <p>Pelayanan pendafataran pemeriksaan CT-Scan melayani pasien setiap hari selama 24 jam (kecuali pemeriksaan kontras hanya sampai  jam 20.00) .</p>
          <p>Permintaan pemeriksaan pemeriksaan CT-Scan rujukan dari luar dapat dilakukan apabila disertakan formulir permintaan pemeriksaan CT-Scan yang telah diisi dengan lengkap dan benar. Pasien melakukan persiapan dengan mengganti pakaian dengan pakaian yang telah disediakan, dan melepaskan seluruh benda yang terdapat bahan logam atau bahan lainnya yang akan mempengaruhi gambaran radiografi, misal : manik-manik, kalung, anting resleting, dan lain-lain).</p>
          <h6 class="fw-bold">CT Scan dengan kontras </h6>
          <p>Pemeriksaan CT-Scan dengan kontras adalah pemeriksaan  yang dilakukan yang menggunakan zat kontras yang diberikan ke pasien dengan cara diminum (kontras oral) atau disuntikkan ke pembuluh darah di lengan pasien (kontras intravena) .untuk memperjelas kualitas gambar dari bagian-bagian yang terlihat samar, seperti pembuluh darah, organ, atau jaringan lunak tertentu. </p>
          <p>Kasus pemeriksaan CT Scan dengan kontras :</p>
          <ul>
            <li>1. SOL</li>
            <li>2. Meningitis</li>
            <li>3. Massa paru</li>
            <li>4. Massa intraabdominal</li>
          </ul>
            <h6 class="fw-bold">CT Scan tanpa kontras: </h6>
          <p>Pemeriksaan CT-Scan  yang dilakukan yang tanpa menggunakan zat kontras </p>
          <p>Kasus / diagnose pemeriksaan CT Scan tanpa kontras :</p>
          <ul>
            <li>1. Stroke</li>
            <li>2. Mild Head Injury (MHI)</li>
            <li>3. RSK (Rinosinusitis kronik)</li>
            <li>4. Radikulopati lumbal</li>
          </ul>
             
          <p>Pasien dengan pemeriksaan kontras dilakukan pemeriksaan laboratorium (ureum dan creatinin) dan tahapan-tahapan persiapan pasien seperti puasa dan lain-lain.</p>
         
        </div>
    </div>
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
                <th>Nama Pemeriksaan</th>
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
  </div>
</section><!-- End Biodata -->
@endsection