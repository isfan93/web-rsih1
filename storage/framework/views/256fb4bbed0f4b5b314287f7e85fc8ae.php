
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','UGD'); ?>
<?php $__env->startSection('judul','Unit Gawat Darurat'); ?>

<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
        <img src="img/igd.jpg" alt="" style="width: 100%">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" style="text-align: justify">
        <p>
          <span class="fw-bold">Unit Gawat Darurat</span> adalah salah satu unit pelayanan di Rumah Sakit yang menyediakan penanganan awal (bagi pasien yang datang langsung ke Rumah Sakit) atau penanganan lanjutan (bagi pasien rujukan dari Fasilitas Pelayanan Kesehatan lain serta dari Public Safety Center (PSC) 119, yang menderita sakit ataupun cedera yang dapat mengancam kelangsungan hidupnya.</p>
          <hr>
          <p>
            <span class="fw-bold">Pelayanan  gawat darurat </span> merupakan pelayanan yang dapat memberikan tindakan yang cepat dan tepat pada seorang atau kelompok orang  agar dapat meminimalkan angka kematian dan mencegah terjadinya kecacatan yang tidak perlu. Upaya peningkatan gawat darurat ditujukan untuk menunjang pelayanan dasar, sehingga dapat menanggulangi pasien gawat darurat baik dalam keadaan sehari-hari maupun dalam keadaan bencana.</p>
        
        <h5 class="fw-bold">Fasilitas</h5>
        <div class="row">
          <div class="col-6">
            <ul>
              <li><i class="ri-check-double-line"></i>2 Triase Merah</li>
              <li><i class="ri-check-double-line"></i>2 Triase Kuning</li>
              <li><i class="ri-check-double-line"></i>2 Triase Hijau</li>
              <li><i class="ri-check-double-line"></i>1 Ruang Isolasi</li>
            </ul>
          </div>
          <div class="col-6">
            <ul>
              <li><i class="ri-check-double-line"></i>1 Ruang Transit Jenazah</li>
              <li><i class="ri-check-double-line"></i>1 Ambulans Emergency</li>
              <li><i class="ri-check-double-line"></i>1 Ambulans Transport</li>
            </ul>
          </div>
      </div>
      </div>
    </div>

  </div>
</section>
<section id="" class="">
  <div class="container">
    <div class="row">

    <div class="card-group">
      <div class="col">
      <div class="card">
        <img class="card-img-top" src="img/ambulance.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Ambulance Emergency</h5>
          
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img class="card-img-top" src="img/igd.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Instalasi IGD</h5>
          
        </div>
      </div>    
    </div>    
    <div class="col">
      <div class="card">
        <img class="card-img-top" src="img/igd.jpg" alt="Card image cap">
        <div class="card-body text-center">
          <h5 class="card-title">Instalasi IGD</h5>
          
        </div>
      </div>    
    </div> 
    </div>
  </div>
  </div>
</section>


<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2></h2>
      <p>Dokter Jaga UGD</p>
    </div>
    
    <div class="row">
      <?php
      use App\Models\Dokter;
      $doks = Dokter::where('poli_id','=',1)->get();
      $dokters = $doks;
    ?>
    <?php $__currentLoopData = $dokters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-6 mt-4 mt-lg-0">
      <br>
      <div class="member d-flex align-items-start">
        <div class="pic"><img src="/img/foto dokter/<?php echo e($dok->foto); ?>" class="img-fluid" alt=""></div>
        <div class="member-info">
          <p class="biodata">Biodata</p>
          <div class="datap">
          <h4><?php echo e($dok->nama_dok); ?></h4>
          <h5><?php echo e($dok->keahlian); ?></h5>
          <div class="data">
          <p>Tempat Tanggal Lahir : <?php echo e($dok->ttl); ?></p>
          <p>Email : <?php echo e($dok->email); ?></p>
          </div>
          <div class="social text-center">
            <a href=""><i class="ri-twitter-fill"></i></a>
            <a href=""><i class="ri-facebook-fill"></i></a>
            <a href=""><i class="ri-instagram-fill"></i></a>
            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            <a href="" data-bs-toggle="modal" data-bs-target="#detaildok_b<?php echo e($dok->id); ?>"> <i class="ri-external-link-line" title="Detail"></i> </a>
          </div>
        </div>
        </div>
      </div>
    </div>


      
      <div class="modal fade" id="detaildok_b<?php echo e($dok->id); ?>" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <div class="row">
                <div class="col">
                    <img class="mx-auto d-block" src="/img/foto dokter/<?php echo e($dok->foto); ?>" style="border-radius: 5px" width="60%" alt="">
                    <div class="biodok">
                        <h2><?php echo e($dok->nama_dok); ?></h2>
                        <h3><?php echo e($dok->keahlian); ?></h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li><?php echo e($dok->ttl); ?></li>
                                <li><?php echo e($dok->pendidikan); ?></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li><?php echo e($dok->email); ?></li>
                                <li>4</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                </div>
                <br>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            
            </div>
        </div>
        </div>
    </div>
    

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
    </div>
  
  </div>
</section><!-- End Biodata -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website1\resources\views/ugd.blade.php ENDPATH**/ ?>