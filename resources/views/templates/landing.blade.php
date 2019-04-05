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
  <!-- <link rel="stylesheet" href="/css/productos.min.css">
    <link rel="stylesheet" href="/css/dashboard.min.css"> -->
  @yield('meta')

  <!-- <link rel="shortcut icon" href="/assets/images/logos/selectonerlogop5.png"> -->
  @yield('css')
  <link rel="stylesheet" href="/css/landingpapaya.min.css">
  <title>
    Papaya Fit | @yield('title')
  </title>
</head>

<body>

  <audio id="sound-success" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-error" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-info" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-warning" src="/assets/sounds/success.mp3"></audio>


  <nav id="navnaranja" class="navbar navbar-expand-lg fixed-top" style="background-color: #ffd261">
    <a class="navbar-brand" href="/">
      <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" alt="Logotipo" style="width: 60px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link texto" href="#">|</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link texto" onclick="changeColor('navnaranja');" href="nosotros"
            style="color: #FF9D00"><strong>Nosotros</strong></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link texto" href="#">|</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link texto" href="blog" style="color: #FF9D00"><strong>Blog</strong></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link texto" href="#">|</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">

        <button style="background-color:#9FC40A;" class="btn btn-succsess my-2 my-sm-0 textobtn"
          type="submit"><strong>Comienza</strong></button>
      </form>
    </div>
  </nav>




  <div class="container-fluid">
    <div class="row">
      <div class="col-12" style="padding:0;">
        <div id="cont1">
          @yield('content')
        </div>
      </div>
    </div>
  </div>



  <footer style="background-color:#fff;" class="imagenfooter clearfix">

    <div class="float-left">
      <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" alt="" class="papayalogofooter">
    </div>
    <div class="row" style="margin-left: 26rem; align-self: center; margin-top: 20rem;">

      <a href="/">
        <h3 style="color:#fff; font-size: 18px;"><strong>Inicio</strong><br></h3>
      </a>
      <a href="/nosotros">
        <h3 style="margin-left:4rem; color:#fff; font-size:18px;"><strong>Nosotros</strong><br></h3>
      </a>
      <h3 style="margin-left:4rem;color:#fff; font-size:18px;"> <strong>FAQ</strong> <br> </h3>
      <a href="/blog">
        <h3 style="margin-left:4rem;color:#fff; font-size:18px;"> <strong>Blog</strong> </h3>
      </a>

      <div class="row float-right" style="padding-left: 8rem;">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <a href="" style="margin-left:3rem;">
          <p>#papayafit</p>
        </a><br><br>        
      </div>
    </div>
    <div style="margin-left: 26rem; color: #fff;align-self: center;margin-top: 1px;">
      <p>__________________________________________________________</p>
    </div>
    <p style="color:#fff;padding-left: 64rem"> <img class="sobre" src="/assets/Assets Papaya Fit/msj.png" alt="">
      hola@papayafit.com</p>

    <div class="row" style="margin-left:26rem;">
      <small style=" margin-left:25px;font-size: 13px; color:#ed8410"> Seguridad</small>
      <small style=" margin-left:25px;font-size: 13px; color:#ed8410">Aviso de Privacidad</small>
      <small style=" margin-left:25px;font-size: 13px; color:#ed8410">Términos y Condiciones</small>
    </div>

    <div style=" margin-top: 2rem;">
      <small style="margin-left: 30rem; color: #fff;">
        @PapayaFit, 2019, Todos los derechos reservados
      </small>

    </div>


  </footer>


  @yield('js')

  <!-- <script>

    function changeColor(id) {
      document.getElementById("navnaranja").style.backgroundColor = "#fff";
      // $("#b").removeClass('is-warning');
    }


  </script> -->

</body>

</html>