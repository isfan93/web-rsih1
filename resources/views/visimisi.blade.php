@extends('layouts.main')
@section('content')
@section('title','VISI DAN MISI')
  <main id="main">

    @section('judul','Visi dan Misi')

    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>VISI</h2>
            <h3>Menjadi rumah sakit pilihan untuk masyarakat Garut dan sekitarnya melalui layanan medis yang berkualitas, proses mudah dan profesional</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 fw-bold">
            <h2>MISI</h2>
            <ul>
              <li><i class="ri-check-double-line"></i> Memberikan pelayanan kesehatan dengan kualitas medis yang terpercaya</li>
              <li><i class="ri-check-double-line"></i> Memberikan pelayanan yang cepat dan praktis dengan sistem informasi dan teknologi yang terintegrasi</li>
              <li><i class="ri-check-double-line"></i> Memberikan pelayanan kesehatan yang secara keuangan efektif, efisien, dan transparan</li>
              <li><i class="ri-check-double-line"></i> Memberikan pelayanan JKN yang optimal sesuai dengan ketentuan yang berlaku</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    {{-- <section id="about" class="about">
      <div class="container">
        <div class="container">
          <div>
            <img src="img/visimisi.jpg" alt="" style="width: 100%">
          </div>
          <br>
          

      </div>
    </section><!-- End About Section --> --}}

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>DIREKTUR DAN MANAJER</p>
        </div>

        <div class="row d-flex justify-content-center">
          <div class="col-3 mt-2">
            <div class="card">
              <img src="img/manajemen/drg hasan.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">
                  drg. Muhammad Hasan, MARS.
                </h5>
                <p class="card-text">Direktur</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-3 mt-2">
            <div class="card">
              <img src="img/manajemen/wahyu.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">
                  Wahyu Suprayogo, SE, MM
                </h5>
                <p class="card-text">Manajer PKRS dan Keuangan</p>
              </div>
            </div>
          </div>

          <div class="col-3 mt-2">
            <div class="card">
              <img src="img/manajemen/dr iva.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">
                  dr. Iva Tania
                </h5>
                <p class="card-text">Manajer Pelayanan Medis</p>
              </div>
            </div>
          </div>

          <div class="col-3 mt-2">
            <div class="card">
              <img src="img/manajemen/depi.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">
                  Depi Rismayanti, S.Kep
                </h5>
                <p class="card-text">Manajer Keperawatan</p>
              </div>
            </div>
          </div>

          <div class="col-3 mt-2">
            <div class="card">
              <img src="img/manajemen/maya.jpg" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title fw-bold">
                  Maya Anggraeni, S.Pd
                </h5>
                <p class="card-text">Manajer SDM dan Umum</p>
              </div>
            </div>
          </div>
          
        </div>

        

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Our Skills Section ======= -->
    {{-- <section id="skills" class="skills">
      <div class="container">

        <div class="section-title">
          <h2>Our Skills</h2>
          <p>Check our Our Skills</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Our Skills Section --> --}}

  </main><!-- End #main -->

@endsection