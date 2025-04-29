@extends('layouts.main')
@section('content')
@section('title','I - Food')
@section('judul','I - Food')

<section id="about" class="about">
  <div class="container">
    <div class="row">
        {{-- <div class="col-4">
            <img src="/img/fasilitas umum/ifood.jpg" alt="..." style="width: 400px; height: 400px;">
        </div> --}}
        <div class="col-12">
          <h3 class="fw-bold">I - Food</h3>
          <p>Didirikan sejak tahun 2018, iFood merupakan café lokal dengan konsep casual dining yang menyajikan menu makanan dan minuman dengan kualitas terbaik dan harga yang terjangkau. iFood hadir untuk memenuhi kebutuhan konsumen dengan rasa dan pelayanan terbaik.
          </p>
          <p> <span class="fw-bold">Layanan : </span> Jam operasional: 07.00 – 21.00 WIB
            Melayani makan di tempat, pesanan dibawa pulang (di bungkus) dan pesan antar (Sudah ada di Grab Food) <span><img style="width: 70px; height: 90px;" src="/img/fasilitas umum/grabfood.png" alt=""></span> 
          </p>
            
          
        </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <img class="justify"  src="/img/fasilitas umum/qrcode_ifood.png" alt="">
      </div>
      <div class="col-sm-8">
        <h5>Alur Pemesanan I-Food di Rawat Inap</h5>
        <ul>
          <li>1. Pastikan sudah scan qr-code pemesanan online ifood
          </li>
          <li>2. Isi data diri </li>
          <li>3. Pilih menu ifood RS Intan Husada.Klik tombol “tambah (Add)” untuk menambahkan menu makanan yang ingin kamu pesan.</li>
          <li>4. Jika sudah selesai memilih makanan, klik tombol hijau tosca di bagian bawah halaman untuk melanjutkan ke halaman daftar pesanan.
          </li>
          <li>5. Pastikan pesanan kamu sudah sesuai ya. Klik tombol “Lanjut Pembayaran” untuk memesan makanan.
          </li>
          <li>6. Pilih metode pembayaran
          </li>
          <li>7. Jika sudah membayar pesanan makanan kamu akan segera diantarkan. Selamat makan!</li>
        </ul>
      </div>
    </div>
      <div class="card mt-5">
        <div class="carde-title">
          <h3 class="text-center biodata">Menu I-Food</h3>
        </div>
        <div class="card-body">
          <div class="row">
          <div class="col-6">
            <img class="text-center" style="width: 100%; height: 100%;" src="/img/fasilitas umum/Menu iFood 2024_X-01.jpg" alt="">
          </div>
          <div class="col-6">
            <img class="text-center" style="width: 100%; height: 100%;" src="/img/fasilitas umum/Menu iFood 2024_X-02.jpg" alt="">
          </div>
        </div>
        </div>
      </div>
  </div>
</section><!-- End Biodata -->
@endsection