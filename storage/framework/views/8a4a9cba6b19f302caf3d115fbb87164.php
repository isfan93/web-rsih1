
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title','TARIF KAMAR'); ?>
<main id="main">
    <?php $__env->startSection('judul','Tarif kamar'); ?>

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h3>Anthurium</h3>
              <table class="table stripped table-sm table-hover">
                <thead class="btn-custom">
                    <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Nomor Ruangan</th>
                        <th>Tarif</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>VVIP</td>
                        <td>401</td>
                        <td>Rp.1.000.000</td>
                        <td><button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#poli1">Lihat kamar</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>VIP</td>
                        <td>402</td>
                        <td>Rp.750.000</td>
                        </tr>
                </tbody>
            </table>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
                <h3>Asoka</h3>
                <table class="table stripped table-sm table-hover">
                  <thead class="btn-custom">
                      <tr>
                          <th>No</th>
                          <th>Kelas</th>
                          <th>Nomor Ruangan</th>
                          <th>Tarif</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Kelas 1</td>
                          <td>301</td>
                          <td>Rp.1.000.000</td>
                          </tr>
                      <tr>
                          <td>2</td>
                          <td>Kelas 2</td>
                          <td>302</td>
                          <td>Rp.750.000</td>
                          </tr>
                  </tbody>
              </table>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website\resources\views/tarif_kamar.blade.php ENDPATH**/ ?>