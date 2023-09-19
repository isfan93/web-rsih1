<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RSIH | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="\img/rsih-logo-bulat.png" rel="icon">
  <link href="\assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="\https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="\assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="\assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="\assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="\assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="\assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="\assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="\assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
  <link href="\assets/css/style.css" rel="stylesheet">
  {{-- <link href="assets/css/style2.css" rel="stylesheet"> --}}

  <!-- =======================================================
  * Template Name: Sailor - v4.10.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @include('layouts.header')



  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="section-title" style="margin-top: 100px">
        <h2>Rumah Sakit Intan Husada</h2>
        <p>@yield('judul')</p>
      </div>
    </div>
  </div>
  
  @yield('content')

  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
  <a href="https://ihospital.rsintanhusada.com/index.php?r=sistemInformasiEksekutif/ketersediaanKamar/index&modulId=39" class="button button2 back-to-top d-flex align-items-center justify-content-center" title="Informasi Kamar"><img class="center flash-button" src="\img/ketersediaanbed.png"></i></a>
  


  <a href="https://wa.me/6281214867272?text=Nama%20%3A%0AAlamat%20%3A%0ANo%20Hp%20%3A%0APesan%20%3A%0A" class="button3 button4 back-to-top d-flex align-items-center justify-content-center" title="Hubungi Kami"><img class="center2" src="\img/wa.png"></i></a>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
        
      <div class="copyright">
        2023 Rumah Sakit Intan Husada | &copy; Developed by <strong><span>Ispan Fajrul Fallakh | <a style="color: white !important" href="https://www.instagram.com/fajrulfallakh/?hl=en"> @fajrulfallakh </a></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        
                {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
         --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  

  <!-- Vendor JS Files -->
  <script src="\assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="\assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="\assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="\assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="\assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="\assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="\assets/js/main.js"></script>
  {{-- <script src="\assets/js/main2.js"></script> --}}

</body>

</html>