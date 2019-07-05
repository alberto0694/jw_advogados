@extends('layouts.site')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">O Escritório</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section services-section bg-light">
      <div class="container mt-0">
        <p>Atuamos desde 1992, quando foi fundado na cidade de Blumenau, Santa catarina. Após seis anos de existência, seu fundador, José Wilson, decidiu transferir o escritório para a cidade de Navegantes, Santa catarina, no qual hoje mantem uma equipe de profissionais atuantes nas áreas do Direito Ambiental, Civil, Criminal, Tributário, Empresarial, Imobiliario, Trabalhista, Previdenciario e Bancário. Temos como principais valores a ética, agilidade e transparência com nossos clientes, defendendo seus interesses e direitos nas diversas esferas jurídicas.</p>
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-4">Temos seu suporte jurídico</h2>
          </div>
        </div>
        <div class="row no-gutters d-flex">
          <div class="col-md-4 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-auction"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Obtenha sua consultoria jurídica.</a></h3>
            </div>
          </div>
          <div class="col-md-4 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-lawyer"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Trabalhe com um escritório de experiência</a></h3>
            </div>
          </div>
          <div class="col-md-4 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Saiba a direção do seu caso</a></h3>
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