@extends('layouts.main')
@section('content')
@section('title','Media dan Karir') 
<main id="main">
    @section('judul','Media dan Karir')
     <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        
        <div class="row">
          @foreach ($post as $p)
          
          <div class="col-lg-6">
            <article class="entry">

              <div class="entry-img">
                <img src="/img/media/{{ $p->gambar }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="/blog_single">{{ $p->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Isfan</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>{{ $p->exceprt }}</p>
                <div class="read-more">
                  <a href="/blog_single/{{ $p->id }}">Read More</a>
                  
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
          @endforeach
          
          
        </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection