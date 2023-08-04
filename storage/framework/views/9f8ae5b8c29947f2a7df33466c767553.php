
<?php $__env->startSection('konten'); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Dokter</h5>

                        <!-- Default Table -->
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#addModal"><button class="btn btn-primary btn-sm">Tambah Data + </button></a>
                                </div>
                                <div class="col-4">                   
                                    <form action="/dokter" method="GET">
                                        <div class="row">
                                            <div class="col-10">
                                                <input type="search" name="search" class="form-control form-control-sm" aria-labelledby="passwordHelpInline" placeholder="Cari Dokter">
                                            </div>
                                            <div class="col-2">
                                                <button type="submit" class="btn btn-danger btn-sm mb-3"><i class="fa fa-search"></i>Cari</button>
                                            </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-sm mt-2"  style="text-align: center; font-size: 0.9rem">
                            <thead style="background-color: aquamarine"> 
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Tempat, Tanggal Lahir</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pendidikan</th>
                                <th scope="col">Keahlian</th>
                                <th scope="col">Foto</th>                                
                                <th scope="col">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no = 1;
                            ?>
                            <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($no++); ?></th>
                                <td><?php echo e($dok->nama_dok); ?></td>
                                <td><?php echo e($dok->ttl); ?></td>
                                <td><?php echo e($dok->email); ?></td>
                                <td><?php echo e($dok->pendidikan); ?></td>
                                <td><?php echo e($dok->keahlian); ?></td>
                                <td><img src="img/foto dokter/<?php echo e($dok->foto); ?>" alt="" style="width: 90px; height: 100px;"></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm delete" data-id="<?php echo e($dok->id); ?>" data-nama="<?php echo e($dok->nama_dok); ?>">Hapus</a>
                                    <a href=""  class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal<?php echo e($dok->id); ?>">Edit</a>
                                    <a href=""  class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#tjadwal<?php echo e($dok->id); ?>">Tambah Jadwal</a>
                                </td>
                            </tr>
                            </tbody>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                        <!-- End Default Table Example -->        
                        <?php echo e($dokter->links()); ?>

                        
                        <?php
                        use App\Models\Poli;
                        
                            use App\Models\Dokter;
                            $dokters = Dokter::all();
                            $doks = $dokters;
                            $poli = Poli::all();
                        ?>
                        <?php $__currentLoopData = $doks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <div class="modal fade" id="editModal<?php echo e($dok->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="/dokter/update/<?php echo e($dok->id); ?>" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Dokter</label>
                                        <input type="text" class="form-control" id="recipient-name" name="nama_dok" value="<?php echo e($dok->nama_dok); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="recipient-name" name="ttl" value="<?php echo e($dok->ttl); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Email</label>
                                        <input type="email" class="form-control" id="recipient-name" name="email" value="<?php echo e($dok->email); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Pendidikan</label>
                                        <input type="text" class="form-control" id="recipient-name" name="pendidikan" value="<?php echo e($dok->pendidikan); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Keahlian</label>
                                        <input type="text" class="form-control" id="recipient-name" name="keahlian" value="<?php echo e($dok->keahlian); ?>">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Foto</label>
                                        <input type="file" class="form-control" id="recipient-name" name="foto" value="<?php echo e($dok->foto); ?>">
                                    </div>
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>


                        
                                 
                        <div class="modal fade" id="tjadwal<?php echo e($dok->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jadwal Dokter</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="/dokter/jadwal" method="post">
                                    <?php echo e(csrf_field()); ?>


                                    <div class="mb-3">
                                        
                                        <input type="text" class="form-control" id="recipient-name" name="dokter_id" value="<?php echo e($dok->id); ?>">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Senin</label>
                                        <input type="text" class="form-control" id="recipient-name" name="senin">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Selasa</label>
                                        <input type="text" class="form-control" id="recipient-name" name="selasa">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Rabu</label>
                                        <input type="text" class="form-control" id="recipient-name" name="rabu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Kamis</label>
                                        <input type="text" class="form-control" id="recipient-name" name="kamis">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Jumat</label>
                                        <input type="text" class="form-control" id="recipient-name" name="jumat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Sabtu</label>
                                        <input type="text" class="form-control" id="recipient-name" name="sabtu">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Minggu</label>
                                        <input type="text" class="form-control" id="recipient-name" name="minggu">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>

                        


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                                                
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="/dokter/tambah" method="post">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Dokter</label>
                                        <input type="text" class="form-control" id="recipient-name" name="nama_dok">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Tempat Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="recipient-name" name="ttl">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Email</label>
                                        <input type="email" class="form-control" id="recipient-name" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Pendidikan</label>
                                        <input type="text" class="form-control" id="recipient-name" name="pendidikan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Keahlian</label>
                                        <input type="text" class="form-control" id="recipient-name" name="keahlian">
                                    </div>
                                    <div class="mb-3">
                                       
                                        <label for="recipient-name" class="col-form-label">Poliklinik</label>
                                        
                                        <div class="input-group mb-3">
                                              <select class="form-select" id="inputGroupSelect01" name="id">
                                              <option selected>Choose...</option>
                                              <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        
                                              <option value="<?php echo e($p->id); ?>"><?php echo e($p->nama_poli); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Foto</label>
                                        <input type="file" class="form-control" id="recipient-name" name="foto">
                                    </div>
                                
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.slim.js" integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
<script>
    $('.delete').click(function(){
        var dok_id = $(this).attr('data-id');
        var nama_dokter = $(this).attr('data-nama');

        swal({
        title: "Yakin?",
        text: "Kamu akan menghapus data Layanan "+nama_dokter+" ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/dokter/hapus/"+dok_id+""
            swal("Data Berhasil dihapus ", {
            icon: "success",
            });
        } else {
            swal("Data tidak dihapus");
        }
        });
    });
    
</script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\@rsih-website\rsih-website1\resources\views/admin/dokter_a.blade.php ENDPATH**/ ?>