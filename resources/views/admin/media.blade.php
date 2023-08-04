@extends('admin.dashboard')
@section('konten')
@include('sweetalert::alert')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Menu Media dan Karir </h5>

                        <!-- Default Table -->
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#addModal"><button class="btn btn-primary btn-sm">Tambah Data + </button></a>
                                </div>
                                <div class="col-4">                   
                                    <form action="/media" method="GET">
                                        <div class="row">
                                            <div class="col-10">
                                                <input type="search" name="search" class="form-control form-control-sm" aria-labelledby="passwordHelpInline" placeholder="Cari Judul Konten">
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
                                <th scope="col">Judul Konten</th>
                                <th scope="col">Isi Singkat</th>
                                <th scope="col">Isi Konten</th>
                                <th scope="col">Tanggal Publish</th>
                                <th scope="col">Penulis</th>
                                <th scope="col">Gambar</th>                                
                                <th scope="col">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($posts as $p)
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->title }}</td>
                                <td>{{ $p->excerpt }}</td>
                                <td>{{ $p->body }}</td>
                                <td>{{ $p->created_at }}</td>
                                <td>Admin</td>
                                <td><img src="/img/media/{{ $p->gambar }}" alt="" style="width: 100px; height: 120px;"></td>
                                <td>
                                    <a href="" style="color: rgb(0, 169, 31); width: 150px; height: 50px;"><i class="ri-pencil-fill"></i></a>
                                    <a href="" style="color: rgb(169, 0, 0)"><i class="ri-close-circle-fill"></i></a>
                                </td>
                            </tbody>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>



    {{-- add modal --}}
    <div class="modal fade modal-lg" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/media/tambah" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Judul konten</label>
                    <input type="text" class="form-control" id="recipient-name" name="title">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Isi Singkat</label>
                    <input type="text" class="form-control" id="recipient-name" name="excerpt">
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Isi Konten</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="body"></textarea>
                      </div>
                </div>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Gambar</label>
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
    {{-- end modal --}}




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
    
@endsection