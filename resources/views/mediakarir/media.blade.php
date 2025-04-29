@extends('layouts.main')
@section('content')
@section('title','Media') 
<main id="main">
    @section('judul','Media')
     <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          @foreach ($media as $md)
          <div class="col-lg-4 col-md-6">
            <article class="entry">
              <div class="entry-img">
                <img src="/img/media/{{ $md->gambar1 }}" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="/blog_single">{{ $md->judul }}</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $md->created_at }}</time></a></li>
                </ul>
              </div>
              <div class="entry-content">
                <div class="read-more">
                  <a href="/media_single/{{ $md->id }}">Read More</a>
                </div>
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