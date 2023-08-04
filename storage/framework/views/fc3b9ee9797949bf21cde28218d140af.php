
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
            <h3>Daftar Dokter Poliklinik </h3>

            <form action="/rajal-dokter" method="GET">
              <div class="row g-3 align-items-center">
                <div class="col-auto">
                  <label class="col-form-label">Cari Dokter</label>
                </div>
                <div class="col-auto">
                  <input type="search" name="search" class="form-control form-control-sm" aria-labelledby="passwordHelpInline">
                </div>
              </div>
            </form>
            <table class="table stripped table-sm table-hover mt-2">
                <thead class="btn-custom">
                    <tr>
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Poliklinik</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                    <tr>
                        <td><?php echo e($index + $dokter->firstItem()); ?></td>
                        <td><?php echo e($d->nama_dok); ?></td>
                        <td><?php echo e($d->poli->nama_poli); ?></td>
                        <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#jadwal<?php echo e($d->id); ?>">Lihat jadwal</button></td>
                    </tr>
                </tbody>


                                        
                        

                        <div class="modal fade" id="jadwal<?php echo e($d->id); ?>" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Jadwal <?php echo e($d->poli->nama_poli); ?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col">
                                            <img src="/img/foto dokter/<?php echo e($d->foto); ?>" style="width: 180px; height: 180px;" alt="">
                                        </div>
                                        <div class="col">
                                            <h4><?php echo e($d->nama_dok); ?></h4>
                                            <?php $__currentLoopData = $d->jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <p><?php echo e($jd->hari); ?> : <?php echo e($jd->dari_jam); ?> - <?php echo e($jd->sampai_jam); ?></p>
                                            
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <a href="" class="" data-bs-toggle="modal" data-bs-target="#detaildok<?php echo e($d->id); ?>">Detail Dokter</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                
                                </div>
                            </div>
                            </div>
                        </div>
                        

                        
                        
                        <div class="modal fade" id="detaildok<?php echo e($d->id); ?>" data-bs-backdrop="poli1" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                
                                <div class="modal-body">
                                    <div class="row">
                                    <div class="col">
                                        <img class="mx-auto d-block" src="/img/foto dokter/<?php echo e($d->foto); ?>" style="border-radius: 5px" width="60%" alt="">
                                        <div class="biodok">
                                            <h2><?php echo e($d->nama_dok); ?></h2>
                                            <h3><?php echo e($d->keahlian); ?></h3>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-6">
                                                <ul>
                                                    <li><?php echo e($d->ttl); ?></li>
                                                    <li><?php echo e($d->pendidikan); ?></li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul>
                                                    <li><?php echo e($d->email); ?></li>
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
            </table>
            <br>
            <?php echo e($dokter->links()); ?>

          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="section-title mt-5">
        <h2></h2>
        <p>Daftar Poliklinik</p>
      </div>
      <?php
        use App\Models\Poli;
        $poli = Poli::all();
        $pol = $poli;
      ?>
      <?php $__currentLoopData = $pol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
      <div class="col-lg-2 mt-4 mt-lg-0">
        <br>
        <div class="member d-flex align-items-start">
          <a href="" data-bs-toggle="modal" data-bs-target="#poli1<?php echo e($p->id); ?>"><div class=""><img src="/img/logo-poli/<?php echo e($p->logo); ?>" class="img-fluid" alt=""></div></a>
        </div>
      </div>

            
        <div class="modal fade modal-xl" id="poli1<?php echo e($p->id); ?>" data-bs-backdrop="poli11" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"><?php echo e($p->nama_poli); ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col">
                          <img src="/img/layanan/<?php echo e($p->gambar); ?>" style="width: 100%; height: 100%;" alt="">
                      </div>
                      <div class="col">
                          <h4><?php echo e($p->nama_poli); ?></h4>
                          <p style="text-align: justify"><?php echo e($p->keterangan); ?></p>                          
                          
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
    </div>
    <br>
  </div>
</section><!-- End Team Section -->

  

  <div class="modal fade" id="poli1" data-bs-backdrop="poli11" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2></h2>
        <p>Daftar Dokter Rawat Jalan</p>
      </div>
      
      <div class="row">
        <?php
        use App\Models\Dokter;
        $doks = Dokter::all();
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
              <a href="" data-bs-toggle="modal" data-bs-target="#detaildok<?php echo e($dok->id); ?>"> <i class="ri-external-link-line" title="Detail"></i> </a>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website\resources\views/rajal-dokter.blade.php ENDPATH**/ ?>