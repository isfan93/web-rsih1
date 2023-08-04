@extends('admin.dashboard')
@section('konten')
<section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
                
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Layanan </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-card-checklist"></i>
                  </div>
                  <div class="ps-3">
                    @php
                        use App\Models\Layanan;
                        $count = Layanan::all()->count();
                        $lay = $count;
                    @endphp
                    <h6>{{ $count }}</h6>
                    <span class="text-success small pt-1 fw-bold">Layanan</span> <span class="text-muted small pt-2 ps-1"></span>
                  </div>
                </div>
                <a href="/layanan"><button class="btn btn-primary btn-sm mt-3">Lihat Data</button></a>
              </div>
            </div>
          </div><!-- End Sales Card -->

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Dokter</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-stethoscope-line"></i>
                  </div>
                  <div class="ps-3">
                    @php
                        use App\Models\Dokter;
                        $count = Dokter::all()->count();
                        $dokter = $count;
                    @endphp
                    <h6>{{ $dokter }}</h6>
                    <span class="text-success small pt-1 fw-bold">Dokter</span>
                  </div>
                </div>
                <a href="/dokter"><button class="btn btn-primary btn-sm mt-3">Lihat Data</button></a>
              </div>
            </div>
          </div><!-- End Sales Card -->

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Rekanan dan Mitra</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-group-fill"></i>
                  </div>
                  <div class="ps-3">
                    @php
                        use App\Models\Rekanan;
                        $count = Rekanan::all()->count();
                        $rekanan = $count;
                    @endphp
                    <h6>{{ $rekanan }}</h6>
                    <span class="text-success small pt-1 fw-bold">Rekanan dan Mitra</span>
                  </div>
                </div>
                <a href="/rekanan"><button class="btn btn-primary btn-sm mt-3">Lihat Data</button></a>
              </div>
            </div>
          </div><!-- End Sales Card -->
          
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Poliklinik</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="ri-hospital-fill"></i>
                  </div>
                  <div class="ps-3">
                    @php
                        use App\Models\Poli;
                        $count = Poli::all()->count();
                        $poli = $count;
                    @endphp
                    <h6>{{ $poli }}</h6>
                    <span class="text-success small pt-1 fw-bold">Poliklinik</span>
                  </div>
                </div>
                <a href="/poli_a"><button class="btn btn-primary btn-sm mt-3">Lihat Data</button></a>
              </div>
            </div>
          </div><!-- End Sales Card -->

          {{-- <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Rawat Inap </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Sales Card --> --}}

          {{-- <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Rawat Jalan</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                  </div>
                  <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Sales Card --> --}}

        </div>
      </div>
    </div>
  </section>
    
@endsection