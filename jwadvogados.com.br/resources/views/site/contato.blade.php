@extends('layouts.site')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Entre em contato</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Entre em contato</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Endereço:</span> Rua José Alcebíades Laurentino, 401, Centro, Navegantes, SC. CEP: 88370-310</p>
          </div>
          <div class="col-md-3">
            <p><span>Telefone:</span>(47) 3342-2162 / (47) 3319-1916</p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:josewilson@jwadvogados.com.br">josewilson@jwadvogados.com.br</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">
            <form action="{{ route('site.message') }}" method="POST" class="bg-light p-5 contact-form">
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

          <div class="col-lg-6 d-flex">
            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.4966315102793!2d-48.65264558546992!3d-26.887729398637525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8cc3c96b14c8f%3A0x984c57a05d498a24!2sR.+Jose+Alcebiades+Laurentino%2C+401+-+Centro%2C+Navegantes+-+SC%2C+88370-310!5e0!3m2!1spt-BR!2sbr!4v1560335262105!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>


@endsection