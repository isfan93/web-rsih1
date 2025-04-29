@extends('layouts.main')
@section('content')
@section('title','Karir') 
<main id="main">
    @section('judul','Karir')
     <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          @foreach ($karir as $kar)
          <div class="col-lg-4 col-md-6">
            <article class="entry">
              {{-- <div class="entry-img">
                <img src="/img/karir/{{ $kar->gambar }}" alt="" class="img-fluid">
              </div> --}}
              <div class="card-body">
                <a href="img/karir/{{ $kar->gambar }}" data-gallery="portfolioGallery" class="portfolio-lightbox"><img src="img/karir/{{ $kar->gambar }}" class="img-fluid" alt="" style="width: 100%" title="Lihat gambar"></a>
              </div>
              <h2 class="entry-title mt-1">
                <p href="#">{{ $kar->judul }}</p>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $kar->created_at }}</time></a></li>
                </ul>
              </div>
            </article>
          </div>
          @endforeach
          
        </div>



















        
        </div>
      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection