
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','RAWAT PENUNJANG'); ?>
<main id="main">
  <?php $__env->startSection('judul','Tarif Penunjang'); ?>

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h3 class="text-center" >Tarif Radiologi</h3>
              <div>
                <embed src="Yel-yel.pdf" type="application/pdf" width="100%" height="600px">
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
                <h3 class="text-center" style="background-color: rgb(0, 190, 127;)">Tarif Laboratorium</h3>
              <div>
                <embed src="Yel-yel.pdf" type="application/pdf" width="100%" height="600px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
                    <img src="/img/our-team-1.jpg" style="width: 180px; height: 180px;" alt="">
                </div>
                <div class="col">
                    <h4>dr. Gustomo</h4>
                    <p>Senin : Pukul 09.00 - 12.00</p>
                    <p>Selasa : Pukul 09.00 - 12.00</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <img src="/img/our-team-1.jpg" style="width: 180px; height: 180px;" alt="">
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
  

  
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <h2></h2>
        
      </div>

          <div class="col-lg-12 mt-4 mt-lg-0">
                <h3>Awal</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perspiciatis qui unde officiis porro quidem expedita a minus repudiandae, in doloremque laborum tempore eveniet praesentium atque ducimus sint commodi rem!</p>
              </div>
            </div>
    
    </div>
  </section><!-- End Team Section -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website\resources\views/tarif_penunjang.blade.php ENDPATH**/ ?>