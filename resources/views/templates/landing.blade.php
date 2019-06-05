<!DOCTYPE html5>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="url" content="{{ env('APP_URL') }}">
  <meta name="api" content="{{ env('API_URL') }}" id="api-url">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="theme-color" content="Primary Color">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  @yield('meta')

  <link rel="shortcut icon" href="/assets/Assets Papaya Fit/LogoPapayaFitDos.png">
  @yield('css')
  <!-- <link rel="stylesheet" href="/css/landingpapaya.min.css"> -->
  <link rel="stylesheet" href="/css/home.min.css">

  <title>
    Papaya Fit | @yield('title')
  </title>
</head>

<!-- <body style="position: absolute;"> -->

<body>

  <audio id="sound-success" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-error" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-info" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-warning" src="/assets/sounds/success.mp3"></audio>


  <nav class="navbar navbar-expand-lg fixed-top nav-background">
    <a class="navbar-brand" href="/">
      <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="Logotipo" class="logopapaya-nav">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div style="padding-top: 1rem;" class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <p class="nav-link text-nav" href="#">|</p>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-nav" href="nosotros" style="color: #FF9D00"><strong>Nosotros</strong></a>
        </li>
        <li class="nav-item active">
          <p class="nav-link text-nav" href="#">|</p>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-nav" href="blog" style="color: #FF9D00"><strong>Blog</strong></a>
        </li>
        <li class="nav-item active">
          <p class="nav-link text-nav" href="#">|</p>
        </li>
      </ul>
      <form style="padding-bottom: 1rem;" class="form-inline my-2 my-lg-0">
        <button style="" class="btn btn-succsess my-2 my-sm-0 btn-start-nav" type="submit">
          <strong><a href="/comenzar" class="text-link">Comienza</a></strong>
        </button>
      </form>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12  px-0">
        <div>
          @yield('content')
        </div>

      </div>
    </div>
  </div>



  <!-- <div class="landing-footer">  -->
    <!-- <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-4 d-flex flex-center mb-5 mb-lg-0">
                <img src=" {{ asset('assets/Assets Papaya Fit/LogoPapayaFitDos.png') }} " alt="Logo" class="papayalogofooter img-fluid w-50">
            </div>
            <div class="col-12 col-lg-4 order-lg-3 d-flex flex-center mb-5 mb-lg-0">
            <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
            <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
            <p class="hashtag-papaya"> <a href="" class="text-link">#papayafit</a></p>
        
            </div>
            <div class="col-12 col-lg-4 d-flex flex-center">
                <ul class="footer-links mb-0">
                    <li class="footer-item mb-0"><a href="" class="footer-link"></a>Inicio</li>
                    <li class="footer-item mb-0"><a href="" class="footer-link"></a>Nosotros</li>
                    <li class="footer-item mb-0"><a href="" class="footer-link">FAQ</a></li>
                    <li class="footer-item mb-0"><a href="" class="footer-link">Blog</a></li>
                </ul>
            </div>
        </div>
    </div> -->
<!-- </div> -->
<footer class="landing-footer">
      <div class="float-left">
      <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="" class="papayalogofooter">
    </div>
    <div class="container-fluid pt-3">
      <!-- <div class="col-12"> -->
          <iv class="row menufooter">
              <!-- <div class="col-12"> -->
              <div class="col-lg-2 col-sm-12 col-xs-12">
                <p><a href="/" class="text-link">Inicio</a></p>
                <!-- <img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt=""> -->
              </div>
              <div class="col-lg-2 col-sm-12 col-xs-12">
                <p><a href="/nosotros" class="text-link">Nosotros</a></p>
                <!-- <img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt=""> -->
              </div>
              <div class="col-lg-2 col-sm-12 col-xs-12">
                <p><a href="" class="text-link">FAQ</a></p>
                <!-- <img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt=""> -->
              </div>
              <div class="col-lg-2 col-sm-12 col-xs-12">
                <p><a href="/blog" class="text-link">Blog</a></p>
                <!-- <img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt=""> -->
              </div>
              <div class="col-lg-2 col-sm-12 col-xs-12">
                  <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
                </div>
              <div class="col-lg-2 col-sm-12 col-xs-12">
                  <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
                </div>
              <div class="col-lg-2 col-sm-12 col-xs-12">
                  <p class=""> <a href="" class="text-link">#papayafit</a></p>
                 
                </div>
          </div>
          <div class="row terminos">
              <small class="doc-footer"> Seguridad</small>
              <small class="doc-footer">Aviso de Privacidad</small>
              <small class="doc-footer"> <a style="color: #ed8410" href="/terminos">Términos y Condiciones</a></small>
            </div>
          <div style=" margin-top: 2rem;">
            <small class="rights-footer">
              <a style="color: #fff" href="https://www.supernovaapps.com.mx/">Powered By Supernova Apps MX,</a>
             
            </small>
          </div>
      <!-- </div> -->
  
      <!-- <hr> -->
    </div>
    <!-- <div class="row" style="">
       
        
       
        <br><br>
      </div> -->
       
    <!-- <div class="col-12 col-lg-4 d-flex flex-center">
                <ul class="footer-links mb-0">
                    <li class="footer-item mb-0"><a href="" class="footer-link"></a>Inicio</li>
                    <li class="footer-item mb-0"><a href="" class="footer-link"></a>Nosotros</li>
                    <li class="footer-item mb-0"><a href="" class="footer-link">FAQ</a></li>
                    <li class="footer-item mb-0"><a href="" class="footer-link">Blog</a></li>
                </ul>
            </div> -->
    <!--<div class="row menu-footer">
      <a href="/" class="text-link"><strong style="color:#fff;">Inicio</strong></a><br>
      <a href="/nosotros" class="text-link"><strong class="menu-footer2">Nosotros</strong></a><br>
      <a href="" class="text-link"><strong class="menu-footer2">FAQ</strong></a><br>
      <a href="/blog" class="text-link"><strong class="menu-footer2">Blog</strong> </a> -->

      <!-- <div class="row float-right" style="padding-left: 8rem;">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <p class="hashtag-papaya"> <a href="" class="text-link">#papayafit</a></p>
        <br><br>
      </div> -->
    <!-- </div>
    <div class="line-footer">
      <p>__________________________________________________________</p>
    </div>
    <p class="text-email"> <img class="icon-email" src="/assets/Assets Papaya Fit/msj.png" alt="">
      hola@papayafit.com</p>

    <div class="row terminos">
      <small class="doc-footer"> Seguridad</small>
      <small class="doc-footer">Aviso de Privacidad</small>
      <small class="doc-footer">Términos y Condiciones</small>
    </div>

    <div style=" margin-top: 2rem;">
      <small class="rights-footer">
       Powered By Supernova Apps MX,
      </small>
    </div> -->
  </footer>

  <!-- <footer class="clearfix landing-footer">
    <div class="float-left">
      <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="" class="papayalogofooter">
    </div>
    <div class="row menu-footer">
      <a href="/" class="text-link"><strong style="color:#fff;">Inicio</strong></a><br>
      <a href="/nosotros" class="text-link"><strong class="menu-footer2">Nosotros</strong></a><br>
      <a href="" class="text-link"><strong class="menu-footer2">FAQ</strong></a><br>
      <a href="/blog" class="text-link"><strong class="menu-footer2">Blog</strong> </a>

      <div class="row float-right" style="padding-left: 8rem;">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <p class="hashtag-papaya"> <a href="" class="text-link">#papayafit</a></p>
        <br><br>
      </div>
    </div>
    <div class="line-footer">
      <p>__________________________________________________________</p>
    </div>
    <p class="text-email"> <img class="icon-email" src="/assets/Assets Papaya Fit/msj.png" alt="">
      hola@papayafit.com</p>

    <div class="row terminos">
      <small class="doc-footer"> Seguridad</small>
      <small class="doc-footer">Aviso de Privacidad</small>
      <small class="doc-footer">Términos y Condiciones</small>
    </div>

    <div style=" margin-top: 2rem;">
      <small class="rights-footer">
        @PapayaFit, 2019, Todos los derechos reservados
      </small>
    </div>
  </footer> -->


  @yield('js')


</body>

</html>