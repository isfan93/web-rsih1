@extends('admin.dashboard')
@section('konten')
@include('sweetalert::alert')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Poliklinik</h5>

                        <!-- Default Table -->
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#addModal"><button class="btn btn-primary btn-sm">Tambah Data + </button></a>
                                </div>
                                <div class="col-4">                   
                                    <form action="/poli_a" method="GET">
                                        <div class="row">
                                        <div class="col-10">
                                            <input type="search" name="search" class="form-control form-control-sm" aria-labelledby="passwordHelpInline" placeholder="Cari Layanan">
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" class="btn btn-danger btn-sm mb-3"><i class="fa fa-search"></i>Cari</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-sm mt-2">
                            <thead style="background-color: aquamarine"> 
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Poli</th>
                                <th scope="col">Keterangan</th> 
                                <th scope="col">Logo</th> 
                                <th scope="col">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($poli as $po)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $po->nama_poli }}</td>
                                <td>{{ $po->keterangan }}</td>
                                <td><img src="img/logo-poli/{{ $po->logo }}" alt="" style="width: 100px; height: 120px;"></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $po->id }}" data-nama="{{ $po->nama_poli }}">Hapus</a>
                                    <a href=""  class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $po->id }}">Edit</a>
                                </td>
                            </tr>
                            </tbody>

                            <div class="modal fade" id="editModal{{ $po->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/poanan/update/{{ $po->id }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Poliklinik</label>
                                        <input type="text" class="form-control" id="recipient-name" name="nama_poanan" value="{{ $po->nama_poli }}">
                                        </div>
                                        <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Masukan Gambar</label>
                                        <input type="file" class="form-control" id="recipient-name" name="gambar" value="{{ $po->logo }}">
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
                            @endforeach
                        </table>
                        <!-- End Default Table Example -->        
                        {{-- {{ $poli->links() }} --}}
                                                
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="/poli_a/tambah" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Poliklinik</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama_poli">
                                    </div>
                                    <div class="mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="keterangan"></textarea>
                                        <label for="floatingTextarea2">Keterangan</label>
                                    </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Masukan Gambar</label>
                                    <input type="file" class="form-control" id="recipient-name" name="gambar">
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Masukan Logo</label>
                                        <input type="file" class="form-control" id="recipient-name" name="logo">
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
        var poli_id = $(this).attr('data-id');
        var nama_poli = $(this).attr('data-nama');

        swal({
        title: "Yakin?",
        text: "Kamu akan menghapus data Layanan "+nama_poli+" ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/poli_a/hapus/"+poli_id+""
            swal("Data Berhasil dihapus ", {
            icon: "success",
            });
        } else {
            swal("Data tidak dihapus");
        }
        });
    });
    
</script>
    
@endsection