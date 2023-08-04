@extends('admin.dashboard')
@section('konten')
@include('sweetalert::alert')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jadwal Dokter </h5>

                        <!-- Default Table -->
                        <div class="container">
                            <div class="row">
                                {{-- <div class="col-8">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#tjadwal"><button class="btn btn-primary btn-sm">Tambah Jadwal Dokter</button></a>
                                </div> --}}
                                <div class="col-4">                   
                                    <form action="{{ route('jadwal') }}" method="GET">
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
                        <table class="table table-sm table-striped-columns mt-2" >
                            <thead style="background-color: aquamarine"> 
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jumat</th>
                                <th>Sabtu</th>
                                <th>Minggu</th>
                                <th scope="col">Opsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $no = 1;
                            // use App\Models\JadwalA;
                            // $jadwal = JadwalA::all();
                            @endphp
                            @foreach ($dokter as $dok)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $dok->nama_dok }}</td>
                                @foreach ($dok->jadwal as $jd)
                                    <td style="font-weight: bold">{{ $jd->senin }}</td>
                                    <td style="font-weight: bold">{{ $jd->selasa }}</td>
                                    <td style="font-weight: bold">{{ $jd->rabu }}</td>
                                    <td style="font-weight: bold">{{ $jd->kamis }}</td>
                                    <td style="font-weight: bold">{{ $jd->jumat }}</td>
                                    <td style="font-weight: bold">{{ $jd->sabtu }}</td>
                                    <td style="font-weight: bold">{{ $jd->minggu }}</td>
                                  
                                
                                <td>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#edtjadwal{{ $jd->id }}"><button class="btn btn-warning btn-sm">Edit</button></a>
                                    <a class="btn btn-sm btn-danger" href="#">Hapus</a>
                                </td>
                            </tr>
                            </tbody>

                               
                        {{-- Modal Edit Jadwal --}}         
                        <div class="modal fade" id="edtjadwal{{ $jd->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jadwal Dokter</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/jadwal/edit_jadwal/{{ $jd->id }}" method="post">
                                        {{ csrf_field() }}
    
                                        <div class="mb-3">
                                            {{-- <label for="">{{ $dok->nama_dokter }}</label> --}}
                                            <input type="text" class="form-control" id="recipient-name" name="dokter_id" value="{{ $dok->id}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Senin</label>
                                            <input type="text" class="form-control" id="recipient-name" name="senin" value="{{ $jd->senin }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Selasa</label>
                                            <input type="text" class="form-control" id="recipient-name" name="selasa" value="{{ $jd->selasa }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Rabu</label>
                                            <input type="text" class="form-control" id="recipient-name" name="rabu" value="{{ $jd->rabu }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Kamis</label>
                                            <input type="text" class="form-control" id="recipient-name" name="kamis" value="{{ $jd->kamis }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Jumat</label>
                                            <input type="text" class="form-control" id="recipient-name" name="jumat" value="{{ $jd->jumat }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Sabtu</label>
                                            <input type="text" class="form-control" id="recipient-name" name="sabtu" value="{{ $jd->sabtu }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Minggu</label>
                                            <input type="text" class="form-control" id="recipient-name" name="minggu" value="{{ $jd->minggu }}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                    </form>
                            </div>
                            </div>
                        </div>

                        {{-- End Modal Jadwal --}}

                            @endforeach


                            @endforeach
                        </table>
                       
                        <!-- End Default Table Example -->        
                        {{-- {{ $layanan->links() }} --}}
                                        
                        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form action="/layanan/tambah" method="post">
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