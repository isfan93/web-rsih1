@extends('layouts.main')
@section('content')
@section('title','Media') 
{{-- <link href="assets/css/style.css" rel="stylesheet"> --}}
<br>
<br>

<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      
      <div class="row">
       
        <div class="col-lg-12">
          <article class="entry">

            <div class="img-tengah">
              <img src="/img/media/{{ $media_s->gambar2 }}" alt="" class="img-fluid">
            </div>
            <br>
            <div class="img-tengah">
              <img src="/img/media/{{ $media_s->gambar3 }}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                <br>    
              <a href="/blog_single">{{ $media_s->judul }}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"></time>{{ $media_s->created_at }}</a></li>
                {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li> --}}
              </ul>
            </div>
          </article><!-- End blog entry -->
        </div>
       
        
      </div>

      </div>

    </div>
  </section><!-- End Blog Section -->
    <div class="card-body">
        <h1 type="text"></h1>
    </div>
    
@endsection