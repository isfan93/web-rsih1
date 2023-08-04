
<?php $__env->startSection('konten'); ?>
<section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
                
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Layanan </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-card-checklist"></i>
                  </div>
                  <div class="ps-3">
                    <?php
                        use App\Models\Layanan;
                        $count = Layanan::all()->count();
                        $lay = $count;
                    ?>
                    <h6><?php echo e($count); ?></h6>
                    <span class="text-success small pt-1 fw-bold">Layanan</span> <span class="text-muted small pt-2 ps-1"></span>
                  </div>
                </div>
                <a href="/layanan"><button class="btn btn-primary btn-sm mt-3">Lihat Data</button></a>
              </div>
            </div>
          </div><!-- End Sales Card -->

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Dokter</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-heart-pulse-fill"></i>
                  </div>
                  <div class="ps-3">
                    <?php
                        use App\Models\Dokter;
                        $count = Dokter::all()->count();
                        $dokter = $count;
                    ?>
                    <h6><?php echo e($dokter); ?></h6>
                    <span class="text-success small pt-1 fw-bold">Dokter</span>
                  </div>
                </div>
                <a href="/dokter"><button class="btn btn-primary btn-sm mt-3">Lihat Data</button></a>
              </div>
            </div>
          </div><!-- End Sales Card -->

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Rekanan dan Mitra</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-group-fill"></i>
                  </div>
                  <div class="ps-3">
                    <?php
                        use App\Models\Rekanan;
                        $count = Rekanan::all()->count();
                        $rekanan = $count;
                    ?>
                    <h6><?php echo e($rekanan); ?></h6>
                    <span class="text-success small pt-1 fw-bold">Rekanan dan Mitra</span>
                  </div>
                </div>
                <a href="/rekanan"><button class="btn btn-primary btn-sm mt-3">Lihat Data</button></a>
              </div>
            </div>
          </div><!-- End Sales Card -->

          

          

        </div>
      </div>
    </div>
  </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website1\resources\views/admin/body.blade.php ENDPATH**/ ?>