@extends('layouts.site')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url( {{ asset($post->imagem)}} );" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">{{ $post->titulo }}</h1>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">
            <p>
              <img src="images/image_1.jpg" alt="" class="img-fluid">
            </p>
            <h2 class="mb-3">{{ $post->titulo }}</h2>
            <p>{{ $post->descricao }}</p>


            <div class="sidebar-box ftco-animate">
              <h3>Recentes</h3>
              @foreach($posts as $post)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url({{ asset($post->imagem) }});"></a>
                  <div class="text">
                    <h3 class="heading"><a href="{{ route('site.post', $post->slug) }}">{{ $post->titulo }}</a></h3>
                    <div class="meta">
                      <div><a href="{{ route('site.post', $post->slug) }}"><span class="icon-calendar"></span> {{ $post->date }}</a></div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

          </div>

        </div>
      </div>
    </section> <!-- .section -->

@endsection