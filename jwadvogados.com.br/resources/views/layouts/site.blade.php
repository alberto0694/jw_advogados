<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JW Advogados - Consultoria Jurídica</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link async rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ route('site.index') }}">
          JW Advogados - Navegantes/SC
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ route('site.index') }}" class="nav-link">Página Inicial</a></li>
            <li class="nav-item"><a href="{{ route('site.quem_somos') }}" class="nav-link">Sobre Nós</a></li>
            <li class="nav-item"><a href="{{ route('site.areas_atuacao') }}" class="nav-link">Áreas de Atuação</a></li>
            <li class="nav-item"><a href="{{ route('site.blog') }}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ route('site.contato') }}" class="nav-link">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">JW Advogados</h2>
              <p>Atuamos desde 1992.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a target="_blank" href="https://www.facebook.com/jwadvocacia"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a target="_blank" href="https://www.instagram.com/jwadvocacia/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Àreas de atuação</h2>
              <ul class="list-unstyled">
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Familiar</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Ambiental</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Administrativo</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Consumidor</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Empresarial</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Seguros</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Previdenciário</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Trabalhista</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Bancário</a></li>
                <li><a class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Tributário</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Horário de funcionamento</h2>
              <div class="opening-hours">
                <p class="pl-3">
                  <span>Segunda à Sexta das 8:30h às 11:30h e das 14:00h às 17:00h </span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Endereço</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Rua José Alcebíades Laurentino, 401, Centro, Navegantes, SC. CEP: 88370-310</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">(47) 3342-2162 / (47) 3319-1916</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">&nbsp;&nbsp;josewilson@jwadvogados.com.br</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- //contador de visitas --}}
    </footer>



  <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>