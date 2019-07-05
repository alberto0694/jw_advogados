@extends('layouts.site')
@section('content')
  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">Áreas de Atuação</h1>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Áreas de Atuação</h2>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-family"></span>
              </div>
              <h3><a href="#">Familiar</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-auction"></span>
              </div>
              <h3><a href="#">Empresarial</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-shield"></span>
              </div>
              <h3><a href="#">Seguros</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-handcuffs"></span>
              </div>
              <h3><a href="#">Criminal</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-house"></span>
              </div>
              <h3><a href="#">Previdenciário</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-employee"></span>
              </div>
              <h3><a href="#">Trabalhista</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-employee"></span>
              </div>
              <h3><a href="#">Ambiental</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-handshake"></span>
              </div>
              <h3><a href="#">Bancário</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-handshake"></span>
              </div>
              <h3><a href="#">Administrativo</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-handshake"></span>
              </div>
              <h3><a href="#">Consumidor</a></h3>
            </div>
          </div>
          <div class="col-md-3 col-lg-2 text-center">
            <div class="practice-area ftco-animate">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-money"></span>
              </div>
              <h3><a href="#">Tributário</a></h3>
            </div>
          </div>
        </div>
      </div>
  </section>

    <section class="ftco-consultation">
      <div class="container-fluid">
        <div class="row d-md-flex">
          <div class="half d-flex justify-content-center align-items-center img" style="background-image: url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="desc text-center">
              <div class="icon"><span class="flaticon-auction"></span></div>
              <h1><a href="{{ route('site.index') }}">JW Advogados</a></h1>
              <h4><a href="{{ route('site.index') }}">Navegantes/SC</a></h4>
            </div>
          </div>
          <div class="half p-3 p-md-5 ftco-animate">
            <h3 class="mb-4">Entre em contato</h3>
            <form action="{{ route('site.message') }}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input name="nome" type="text" class="form-control" placeholder="Seu nome">
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="Seu e-mail">
              </div>
              <div class="form-group">
                <input name="telefone" type="text" class="form-control" placeholder="Seu nome">
              </div>
              <div class="form-group">
                <input name="assunto" type="text" class="form-control" placeholder="Assunto">
              </div>
              <div class="form-group">
                <textarea name="mensagem" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection