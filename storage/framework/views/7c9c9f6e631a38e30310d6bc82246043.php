
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','RAWAT JALAN'); ?>
<main id="main">
  <?php $__env->startSection('judul','Rawat Jalan'); ?>

  
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h3>Daftar Poliklinik </h3>
            <table class="table stripped table-sm table-hover"  style="text-align: center">
              <thead class="btn-custom">
                  <tr>
                      <th>No</th>
                      <th>Nama Poliklinik</th>
                      <th>Jumlah Dokter</th>
                      <th>Lokasi</th>
                      <th>Opsi</th>
                  </tr>
              </thead>
              
              <tbody>
                <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($jd->id); ?></td>
                  <td><a href="" class="" data-bs-toggle="modal" data-bs-target="#anak<?php echo e($jd->id); ?>"><?php echo e($jd->nama_poli); ?></a></td>
                  <td><?php echo e($jd->jumlah_dok); ?></td>
                  <td><?php echo e($jd->lokasi); ?></td>
                  
                  <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#poli1<?php echo e($jd->id); ?>">Lihat jadwal</button></td>
              </tr>
              
                  
                  <div class="modal fade" id="anak<?php echo e($jd->id); ?>" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo e($jd->nama_poli); ?></h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                              <div class="col-12">
                                <img src="img/layanan/<?php echo e($jd->gambar); ?>" style="width: 100%" alt="">
                                <br>
                                <p style="text-align: justify"><?php echo e($jd->keterangan); ?></p>
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
                  
                  
                    
                    <div class="modal fade" id="poli1<?php echo e($jd->id); ?>" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Dokter <?php echo e($jd->nama_poli); ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col">
                                      <img src="/img/foto dokter/Gustomo Panantro.png" style="width: 180px; height: 180px;" alt="">
                                  </div>
                                  <div class="col">
                                      <h4>dr. Gustomo</h4>
                                      <p>Senin : Pukul 09.00 - 12.00</p>
                                      <p>Selasa : Pukul 09.00 - 12.00</p>
                                      <a href="" class="" data-bs-toggle="modal" data-bs-target="#gustomo">Detail Dokter</a>
                                  </div>
                              </div>
                              <br>
                              <div class="row">
                                  <div class="col">
                                      <img src="/img/foto dokter/Mustakim.png" style="width: 180px; height: 180px;" alt="">
                                  </div>
                                  <div class="col">
                                      <h4>dr. Mustakim</h4>
                                      <p>Senin : Pukul 09.00 - 12.00</p>
                                      <p>Selasa : Pukul 09.00 - 12.00</p>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Team Section -->



<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    
  </section><!-- End Team Section -->

  

  <div class="modal fade" id="poli1" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal Dokter Anak</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <img src="/img/foto dokter/Gustomo Panantro.png" style="width: 180px; height: 180px;" alt="">
                </div>
                <div class="col">
                    <h4>dr. Gustomo</h4>
                    <p>Senin : Pukul 09.00 - 12.00</p>
                    <p>Selasa : Pukul 09.00 - 12.00</p>
                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#gustomo">Detail Dokter</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <img src="/img/foto dokter/Mustakim.png" style="width: 180px; height: 180px;" alt="">
                </div>
                <div class="col">
                    <h4>dr. Mustakim</h4>
                    <p>Senin : Pukul 09.00 - 12.00</p>
                    <p>Selasa : Pukul 09.00 - 12.00</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
  

  

  
  <div class="modal fade" id="polib" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Poliklinik Anak</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <img src="img/curry.png" style="border-radius: 5px" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, consectetur.</p>
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
  

  
  
  <div class="modal fade" id="gustomo" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Poliklinik Anak</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col">
                <img class="mx-auto d-block" src="/img/foto dokter/Gustomo Panantro.png" style="border-radius: 5px" width="80%" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, consectetur.</p>
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
  

  
  <section id="team" class="team section-bg">
    <div class="container">
      <div class="section-title">
        <h2></h2>
        <p>Daftar Dokter Rawat Jalan</p>
      </div>
      
      <div class="row">
        <?php
        use App\Models\Dokter;
            $q = Dokter::all();
            $doks =  $q;
        ?>
      
      <?php $__currentLoopData = $doks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            </div>
          </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



      </div>
      </div>
    
    </div>
  </section><!-- End Biodata -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website\resources\views/rajal.blade.php ENDPATH**/ ?>