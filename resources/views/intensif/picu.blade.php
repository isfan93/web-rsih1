@extends('layouts.main')
@section('content')
@section('title','PICU')
@section('judul','PICU (P??? Intensif Care Unit)')
    
<section id="about" class="about">
    <div class="container">
  
      <div class="row content">
        <div class="col-lg-6">
          <img src="img/rawat inap/vvip.jpg" alt="" style="width: 100%">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
            <h4 class="title-modal">Intensif Care Unit</h4>
            <p><span style="font-weight: bold">Pelayanan ICU</span> adalah pelayanan untuk pasien kritis yang membutuhkan pemantauan intensif dan bantuan alat   pernafasan lanjut / support pernafasan dasar dengan sekurang-kurangnya support 2 organ sistem tubuh.</p> 

            <p><span style="font-weight: bold">Pasien masuk ICU:</span> dapat disesuaikan berdasrakan 7 parameter yaitu: Laju pernafasan, Kadar oksigen dalam darah, Kebutuhan dukungan oksigen, Tekanan darah sistolik, Tempratur tubuh, Laju jantung, dan Kesadaran. Pasien ICU merupakan risiko tinggi yang respon selanjutnya adalah dilakukan resusitasi (bebaskan jalan Nafas, support oksigen dan sirkulasi).</p>
            <p><span style="font-weight: bold">Fasilitas :</span> Mesin Ventilasi Mekanik (Ventilator), Monitor Invasif dan Non Invasif, Oxygen Central, Suction Central, Infus Pump, Syringe Pump, Defibrilator, Bed Pasien Elektrik, Pemasangan NGT (Naso Gastrik Tube), Pemasangan DC (Dower Catheter), Pemasangan CVC (Central Venous Catheter), Staf khusus Terlatih.</p>
        </div>
      </div>
  
    </div>
  </section>

  
  <!-- ======= Portfolio Section ======= -->
  <section id="layanan" class="portfolio">
    <div class="container">
      <div class="row portfolio-container">

        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <video controls width="400" height="300">
            <source src="video/video1.mp4" type="video/mp4">
          </video>
        </div> --}}

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <a href="img/rawat inap/vvip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="img/rawat inap/vvip.jpg" class="img-fluid" alt=""></a>
            <a href="img/rawat inap/vvip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
            <div class="portfolio-info">
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <a href="img/rawat inap/vvip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="img/rawat inap/vvip.jpg" class="img-fluid" alt=""></a>
            <a href="img/rawat inap/vvip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
            <div class="portfolio-info">
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <a href="img/rawat inap/vvip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="img/rawat inap/vvip.jpg" class="img-fluid" alt=""></a>
            <a href="img/rawat inap/vvip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
            <div class="portfolio-info">
            </div>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Portfolio Section ======= -->
  {{-- <section id="layanan" class="portfolio">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <h1>Fasilitas</h1>
        </div>
      </div>
      <br>

      <div class="row portfolio-container">

        <div class="col-lg-6 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="img/rawat inap/vvip.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>High Care Unit</h4>
            </div>
          </div>
          <br>
          <button class="btn btn-primary btn-small" style="background-color: rgb(43, 185, 138)"><a style="color: white" href="" data-bs-toggle="modal" data-bs-target="#fasilitas1">Lihat Detail</a></button>
        </div>

        <div class="col-lg-6 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="img/rawat inap/vvip.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Intensive Care Unit</h4>
              </div>
            </div>
          <br>
          <button class="btn btn-small" style="background-color: rgb(43, 185, 138)"><a style="color: white" href="" data-bs-toggle="modal" data-bs-target="#fasilitas2">Lihat Detail</a></button>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section --> --}}


  {{-- Modal Fasilitas --}}
  <div class="modal modal-xl fade" id="fasilitas1" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">HCU</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <img src="img/rawat inap/vvip.jpg" style="width: 100%" alt="">
                </div>
                <div class="col">
                    <h4 class="title-modal">High Care Unit</h4>
                    <p><span style="font-weight: bold"> Pelayanan HCU</span> adalah pelayanan pasien dengan risiko mengalami perburukan, sehingga membutuhkan pemantauan intensif dengan bantuan support single organ tubuh.</p> 
                    <p><span style="font-weight: bold">Pasien masuk HCU:</span> dapat disesuaikan berdasrakan 7 parameter yaitu: Laju pernafasan, Kadar oksigen dalam darah, Kebutuhan dukungan oksigen, Tekanan darah sistolik, Tempratur tubuh, Laju jantung, dan Kesadaran.</p>
                    <p><span style="font-weight: bold">Fasilitas :</span> Oxygen Central, Suction Central, Patient Monitor, Infus Pump, Syringe Pump, Defibrilator, Bed Pasien Elektrik,  Pemasangan NGT (Naso Gastrik Tube), Pemasangan DC (Dower Catheter), Pemasangan CVC (Central Venous Catheter), Staf khusus Terlatih.
                    </p>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-xl fade" id="fasilitas2" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">ICU</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <img src="img/rawat inap/vvip.jpg" style="width: 100%" alt="">
                </div>
                <div class="col">
                    <h4 class="title-modal">Intensif Care Unit</h4>
                    <p><span style="font-weight: bold">Pelayanan ICU</span> adalah pelayanan untuk pasien kritis yang membutuhkan pemantauan intensif dan bantuan alat   pernafasan lanjut / support pernafasan dasar dengan sekurang-kurangnya support 2 organ sistem tubuh.</p> 

                    <p><span style="font-weight: bold">Pasien masuk ICU:</span> dapat disesuaikan berdasrakan 7 parameter yaitu: Laju pernafasan, Kadar oksigen dalam darah, Kebutuhan dukungan oksigen, Tekanan darah sistolik, Tempratur tubuh, Laju jantung, dan Kesadaran. Pasien ICU merupakan risiko tinggi yang respon selanjutnya adalah dilakukan resusitasi (bebaskan jalan Nafas, support oksigen dan sirkulasi).</p>
                    <p><span style="font-weight: bold">Fasilitas :</span> Mesin Ventilasi Mekanik (Ventilator), Monitor Invasif dan Non Invasif, Oxygen Central, Suction Central, Infus Pump, Syringe Pump, Defibrilator, Bed Pasien Elektrik, Pemasangan NGT (Naso Gastrik Tube), Pemasangan DC (Dower Catheter), Pemasangan CVC (Central Venous Catheter), Staf khusus Terlatih.</p>
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- End Fasilitas --}}

  
  
@endsection