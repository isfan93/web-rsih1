
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <img class="logo" src="loggweb.png" alt="">
      <h1 class="logo me-auto"> <img src="\img/rsih-logo-bulat.png" alt=""> <a href="/">RSIH</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">@lang('header.home')</a></li>

          <li class="dropdown"><a href="#"><span>@lang('header.about')</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/sejarah">Sejarah</a></li>
              <li><a href="/visimisi">Visi dan Misi</a></li>
              <li><a href="/penghargaan">Penghargaan</a></li>
            </ul>
          </li>
          <li><a href="/mitra">Rekanan dan Mitra</a></li>
          <li><a href="/dokter_view">Dokter</a></li>
          <li class="dropdown"><a href="#"><span>Jenis Pelayanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/ugd">Unit Gawat Darurat</a></li>
              <li class="dropdown"><a href="/rajal-dokter"><span>Unit Rawat Jalan</span></a></li>
              <li class="dropdown"><a href="#"><span>Unit Rawat Inap</span> <i class="bi bi-chevron-right"></i></a>
                @php
                use App\Models\Ranap;
                $no = 1;
                $ranap = Ranap::all();
                @endphp
                
                <ul>
                  @foreach ($ranap as $ran)
                <li><a href="{{ route('ranap', $ran->id) }}">{{ $ran->kelas }}</a></li>
                  {{-- <li><a href="/vvip">VVIP</a></li>
                  <li><a href="/vip">VIP</a></li>
                  <li><a href="/utama">Utama</a></li>
                  <li><a href="/kelas1">Kelas 1</a></li>
                  <li><a href="/kelas2">Kelas 2</a></li>
                  <li><a href="/kelas3">Kelas 3</a></li>
                  <li><a href="#">Isolasi</a></li> --}}
                  @endforeach
                </ul>
              </li> 
              <li class="dropdown"><a href="#"><span>Unit Intensif</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/hcu">HCU</a></li>
                  <li><a href="/icu">ICU</a></li>
                  <li><a href="/picu">PICU</a></li>
                  <li><a href="/isolasi">Isolasi</a></li>
                </ul>
              </li> 
              <li class="dropdown"><a href="#"><span>Unit Penunjang</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/radiologi">Unit Radiologi</a></li>
                  <li><a href="/laboratorium">Unit Laboratorium</a></li>
                  <li><a href="/farmasi">Unit Farmasi</a></li>
                  <li><a href="#">Unit Gizi</a></li>
                  <li><a href="#">Unit OK</a></li>
                  <li><a href="#">Unit VK</a></li>
                </ul>
              </li>
              <li><a href="/gizi">Unit Gizi</a></li>
              <li><a href="/mcu">Unit MCU</a></li>
              <li><a href="/pelpro">Unit Pelayanan Prioritas</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="/fasilitas_umum"><span>Fasilitas Umum</span></a></li>
          <li><a href="/blog">Media dan Karir</a></li>
          <li><a href="/kontak">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->