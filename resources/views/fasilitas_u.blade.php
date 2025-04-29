@extends('layouts.main')
@section('content')
@section('title','FASILITAS UMUM')
<main id="main">
  @section('judul','Fasilitas Umum')

<!-- ======= Team Section ======= -->
<section id="" class="">
    <div class="container">
      <div class="row">
      <div class="card-group">
        <div class="col">
        <div class="card mx-2">
          <img class="card-img-top" src="img/fasilitas umum/intan mart.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title biodata py-2">Intan Mart</h5>
            {{-- <h1 style="background-color: aquamarine; border-radius: 5px; margin-top: 5px;"><i class="ri-phone-fill"></i> 0123445</h1> --}}
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mx-2">
          <img class="card-img-top" src="img/fasilitas umum/ifood.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title biodata py-2">I Food</h5>
            <a href="/fasilitas_umum/detail/ifood" class="btn btn-sm btn-success biodata" style="margin: auto auto">Lihat Detail</a>
            {{-- <h1 style="background-color: aquamarine; border-radius: 5px; margin-top: 5px;"><i class="ri-phone-fill"></i> 0123445</h1> --}}
          </div>
        </div>    
      </div> 
      <div class="col">
        <div class="card mx-2">
          <img class="card-img-top" src="img/fasilitas umum/atm_cntr.jpg" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title biodata py-2">ATM Center</h5>
            {{-- <h1 style="background-color: aquamarine; border-radius: 5px; margin-top: 5px;"><i class="ri-phone-fill"></i> 0123445</h1> --}}
          </div>
        </div>    
      </div>    
      </div>
    </div>
    <div class="row pt-2">
      <div class="card-group">
        <div class="col-4">
          <div class="card mx-2">
            <img class="card-img-top" src="img/fasilitas umum/parkir.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title biodata py-2">Parkir</h5>
              <a href="/fasilitas_umum/detail/parkir" class="btn btn-sm btn-success biodata" style="margin: auto auto">Lihat Detail</a>
              {{-- <h1 style="background-color: aquamarine; border-radius: 5px; margin-top: 5px;"><i class="ri-phone-fill"></i> 0123445</h1> --}}
            </div>
          </div>    
        </div>
        <div class="col-4">
          <div class="card mx-2">
            <img class="card-img-top" src="img/fasilitas umum/mushola.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title biodata py-2">Mushola</h5>
              <a href="/fasilitas_umum/detail/mushola" class="btn btn-sm btn-success biodata" style="margin: auto auto">Lihat Detail</a>
              {{-- <h1 style="background-color: aquamarine; border-radius: 5px; margin-top: 5px;"><i class="ri-phone-fill"></i> 0123445</h1> --}}
            </div>
          </div>    
        </div>
        
      </div>
    </div>
    </div>
  </section>
@endsection