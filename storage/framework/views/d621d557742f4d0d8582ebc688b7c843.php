
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','BERANDA'); ?>
<section id="hero" style="margin-top: -50px;">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/home/home1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown bg">Selamat Datang <br> <span>Rumah Sakit Intan Husada Garut</span></h2>
              <p class="animate__animated animate__fadeInUp bg">Menjadi Rumah Sakit pilihan untuk masyarakat Garut dan sekitarnya
                melalui layanan medis yang berkualitas, proses yang mudah dan profesional</p>
              <a href="#layanan" class="btn-get-started animate__animated animate__fadeInUp scrollto">Semua Layanan</a>
            </div>
          </div>
        </div>
      </div>

      
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(img/home/home4.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(img/home/home5.jpg)">
          <div class="carousel-container">
            <div class="container">
            </div>
          </div>
        </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <section id="" class="">
    <div class="container">
      <div class="row">

      <div class="card-group">
        <div class="col">
        <div class="card">
          <img class="card-img-top" src="img/ambulance.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Ambulance Emergency</h5>
            <h1 style="background-color: aquamarine; border-radius: 5px; margin-top: 5px;"><i class="ri-phone-fill"></i> 0123445</h1>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img class="card-img-top" src="img/igd.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title">Instalasi IGD</h5>
            <h1 style="background-color: aquamarine; border-radius: 5px; margin-top: 5px;"><i class="ri-phone-fill"></i> 0123445</h1>
          </div>
        </div>    
      </div>    
      </div>
    </div>
    </div>
  </section>

   <!-- ======= Portfolio Section ======= -->
   <section id="layanan" class="portfolio">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center" style="background-color: rgb(49, 216, 161); border-radius: 5px"> 
          <h1>Layanan Kami</h1>
        </div>
      </div>
      <br>

      <div class="row portfolio-container">

        <?php $__currentLoopData = $layanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="img/layanan/<?php echo e($lay->gambar); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo e($lay->nama_layanan); ?></h4>
              
              <div class="portfolio-links">
                <a href="img/layanan/<?php echo e($lay->gambar); ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Penghargaan 1"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
        </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>

    </div>
  </section><!-- End Portfolio Section -->

        

    </div>
  </section>

  <main id="main">

    <!-- ======= Clients Section ======= -->
    

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website\resources\views/home.blade.php ENDPATH**/ ?>