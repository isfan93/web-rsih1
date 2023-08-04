
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','PENUNJANG'); ?>
<main id="main">
  <?php $__env->startSection('judul','Penunjang'); ?>

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">
          <div class="col-lg-12 mt-4 mt-lg-0 text-center">
            <p>
                <a class="btn btn-custom" data-bs-toggle="collapse" href="#rad" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Radiologi</a>
                <button class="btn btn-custom" type="button" data-bs-toggle="collapse" data-bs-target="#lab" aria-expanded="false" aria-controls="multiCollapseExample2">Laboratorium</button>
                <button class="btn btn-custom" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample2">Farmasi Rajal</button>
                <button class="btn btn-custom" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample2">Farmasi Ranap</button>
                <button class="btn btn-custom" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample2">Kamar Bedah</button>
                <button class="btn btn-custom" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample6" aria-expanded="false" aria-controls="multiCollapseExample2">Ruang Bersalin</button>
                <button class="btn btn-custom" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3 multiCollapseExample4">Tampilkan Semua</button>
              </p>
    </div>
  </section><!-- End Team Section -->

  <div class="container">
    <div class="collapse multi-collapse" id="rad">
        <div class="card card-body">
          <div class="row">
          <div class="col-6">
            <h1>Radiologi</h1>
            <img src="img/curry.png" style="border-radius: 5px" alt="">
          </div>
          <div class="col-6">
            <h2>Fasilitas</h2>
            <ul>
              <li>Bed Kamar</li>
              <li>Kamar Mandi</li>
              <li>Ruang Tunggu</li>
            </ul>
          </div>
        </div>
      </div>
      </div>
      <br>
      <div class="collapse multi-collapse" id="lab">
        <div class="card card-body">
            <div class="row">
                <div class="col-6">
                  <h1>Laboratorium</h1>
                  <img src="img/curry.png" style="border-radius: 5px" alt="">
                </div>
                <div class="col-6">
                  <h2>Fasilitas</h2>
                  <ul>
                    <li>Bed Kamar</li>
                    <li>Kamar Mandi</li>
                    <li>Ruang Tunggu</li>
                  </ul>
                </div>
              </div>
        </div>
      </div>
  </div>
  <br>
  
    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-rad">Radiologi</li>
            <li data-filter=".filter-lab">Laboratorium</li>
            <li data-filter=".filter-repairs">Farmasi</li>
            <li data-filter=".filter-design">Kamar Bedah</li>
            <li data-filter=".filter-design">Ruang Bersalin</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-rad">
              <div class="portfolio-content h-100">
                <img src="img/bakso.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Remodeling 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img/bakso.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-lab">
              <div class="portfolio-content h-100">
                <img src="img/bakso.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Construction 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img/bakso.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="img/bakso.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Repairs 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="img/bakso.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->


          </div><!-- End Projects Container -->

        </div>

      </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website\resources\views/penunjang.blade.php ENDPATH**/ ?>