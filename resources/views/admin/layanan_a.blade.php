@extends('admin.dashboard')
@section('konten')
@include('sweetalert::alert')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Layanan</h5>

                        <!-- Default Table -->
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#addModal"><button class="btn btn-primary btn-sm">Tambah Data + </button></a>
                                </div>
                                <div class="col-4">                   
                                    <form action="/layanan" method="GET">
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
                                <th scope="col">Nama Layanan</th>
                                <th scope="col">Gambar</th> 
                                <th scope="col">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($layanan as $lay)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $lay->nama_layanan }}</td>
                                <td><img src="img/layanan/{{ $lay->gambar }}" alt="" style="width: 100px; height: 120px;"></td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm delete" data-id="{{ $lay->id }}" data-nama="{{ $lay->nama_layanan }}">Hapus</a>
                                    <a href=""  class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $lay->id }}">Edit</a>
                                </td>
                            </tr>
                            </tbody>

                            <div class="modal fade" id="editModal{{ $lay->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="/layanan/update/{{ $lay->id }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Layanan</label>
                                        <input type="text" class="form-control" id="recipient-name" name="nama_layanan" value="{{ $lay->nama_layanan }}">
                                        </div>
                                        <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Masukan Gambar</label>
                                        <input type="file" class="form-control" id="recipient-name" name="gambar" value="{{ $lay->gambar }}">
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
                        {{ $layanan->links() }}
                                                
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="/layanan/tambah" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Layanan</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama_layanan">
                                    </div>
                                    <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Masukan Gambar</label>
                                    <input type="file" class="form-control" id="recipient-name" name="gambar">
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
        var lyananid = $(this).attr('data-id');
        var nama_layanan = $(this).attr('data-nama');

        swal({
        title: "Yakin?",
        text: "Kamu akan menghapus data Layanan "+nama_layanan+" ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/layanan/hapus/"+lyananid+""
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