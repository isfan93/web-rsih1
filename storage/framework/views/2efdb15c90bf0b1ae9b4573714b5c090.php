
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','REKANAN DAN MITRA'); ?>
<!-- ======= Breadcrumbs ======= -->
<?php $__env->startSection('judul','Rekanan dan Mitra'); ?>


<div class="container">
  <div class="col-lg-12 mt-4 mt-lg-0">
    
      <h3>Rumah Sakit Intan Husada telah bekerja sama dengan : </h3>
  </div>
  <div class="row">
    <div class="section-title mt-5">
    </div>
    <?php
      use App\Models\Rekanan;
      $rekanan = Rekanan::all();
      $rek = $rekanan;
    ?>
    <?php $__currentLoopData = $rek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <div class="col-lg-2">
      <br>
      <div class="member d-flex align-items-start">
        <div class=""><img src="/img/rekanan/<?php echo e($r->logo); ?>" class="img-fluid" alt=""></div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </div>

  <div>
    <img src="img/rekanan dan mitra.jpg" alt="" style="width: 100%">
  </div>
</div>
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website1\resources\views/mitra.blade.php ENDPATH**/ ?>