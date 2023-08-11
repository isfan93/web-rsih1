@extends('admin.dashboard')
@section('konten')
@include('sweetalert::alert')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Testimoni</h5>

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
                        

                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Isi konten</th>
                                    <th>foto</th>
                                    <th>opsi</th>
                                </tr>
                            </thead>
                            @php
                                $no=1;
                            @endphp
                            <tbody>
                                @foreach ($testi as $t)
                                    
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $t->nama }}</td>
                                    <td>{{ $t->isi_testimoni }}</td>
                                    <td><img src="/img/foto_testimoni/{{ $t->foto }}" alt="" style="width: 100px; height: 100px;"></td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="" data-bs-toggle="modal" data-bs-target="#editData{{ $t->id }}">Edit</a>
                                        <a class="btn btn-danger btn-sm delete" data-id="{{ $t->id }}" data-nama="{{ $t->nama }}">Hapus</a>
                                    </td>
                                </tr>

                                {{-- edit --}}

                                <div class="modal fade" id="editData{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <form action="testimoni/update/{{ $t->id }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                <label for="">Nama </label>
                                                <input type="text" class="form-control" name="nama" value="{{ $t->nama }}">
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control" placeholder="Isi Testimoni" id="floatingTextarea2" style="height: 100px" name="isi_testimoni">{{ $t->isi_testimoni }}</textarea>
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

                                @endforeach
                            </tbody>
                        </table>
                        
                                                
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="{{ route('testi-tambah') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="">Nama </label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" placeholder="Isi Testimoni" id="floatingTextarea2" style="height: 100px" name="isi_testimoni"></textarea>
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
        var testi_id = $(this).attr('data-id');
        var nama_user = $(this).attr('data-nama');

        swal({
        title: "Yakin?",
        text: "Kamu akan menghapus testimoni dari "+nama_user+" ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location = "/testimoni/hapus/"+testi_id+""
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