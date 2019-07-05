@extends('layouts.site')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Últimas Notícias</h1>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Recentes</h2>
          </div>
        </div>
        <div class="row d-flex">
          @foreach($posts as $post)
            <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry justify-content-end">
                <a href="{{ route('site.post', $post->slug) }}" class="block-20" style="background-image: url({{ asset($post->imagem) }});">
                </a>
                <div class="text p-4 float-right d-block">
                  <div class="topper d-flex align-items-center">
                    <div class="one py-2 pl-3 pr-1 align-self-stretch">
                      <span class="day">{{ $post->day }}</span>
                    </div>
                    <div class="two pl-0 pr-3 py-2 align-self-stretch">
                      <span class="mos">{{ $post->month }}</span>
                      <span class="yr">{{ $post->year }}</span>
                    </div>
                  </div>
                  <h3 class="heading mt-2"><a href="#">{{ $post->titulo }}</a></h3>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="{{ route('site.blog', ['page' => 1]) }}">&lt;</a></li>
                @for ($i = 1; $i <= $posts->lastPage(); $i++)
                  @if(app('request')->input('page') == (String)$i)
                    <li class="active"><a href="{{ route('site.blog', ['page' => $i]) }}">{{ $i }}</a></li>
                  @else
                    <li><a href="{{ route('site.blog', ['page' => $i]) }}">{{ $i }}</a></li>
                  @endif
                @endfor
                <li><a href="{{ route('site.blog', ['page' => $posts->lastPage()]) }}">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>


      </div>
    </section>

@endsection