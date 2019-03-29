<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="url" content="{{ env('APP_URL') }}">
  <meta name="api" content="{{ env('API_URL') }}" id="api-url">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="theme-color" content="Primary Color">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @yield('meta')

  <link rel="shortcut icon" href="/assets/Assets Papaya Fit/Logo S/papaya.png">
  <link rel="stylesheet" href="/css/dashboard.min.css?{{rand()}}">
  <link rel="stylesheet" href="/css/landingpapaya.min.css">


  @yield('css')

  @section('css')
  <link rel="stylesheet" href="/css/home.min.css">
  <link rel="stylesheet" href="/css/landingpapaya.min.css">

  @endsection

  <title>Blog</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fff;">
    <a class="navbar-brand" href="/">
      <!-- <img src="/assets/" alt="Logotipo" class="img-fluid"> -->
      <!-- <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png"  alt="Logotipo" style="width: 60px;"> -->
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
          <a class="nav-link texto" href="nosotros"><strong>Nosotros</strong></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link texto" href="#">|</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link texto" href="blog"><strong>Blog</strong></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link texto" href="#">|</a>
        </li>
        <li>

          <a href="/">
            <img src="/assets/Assets Papaya Fit/Logo Sin Papaya con Slogan rec.png" alt="Logotipo"
              style="width:500px ; padding-right:10rem;margin-left: 20rem;">

          </a>

        </li>

      </ul>

      <form class="form-inline my-2 my-lg-0">

        <!-- <h5 class="my-2 my-sm-0 texto p-2"> <strong>Iniciar Sesión</strong> </h5> -->
        <button style="background-color:#9FC40A;" class="btn btn-succsess my-2 my-sm-0 textobtn"
          type="submit"><strong>Comienza</strong></button>
      </form>
    </div>
  </nav>

  <br><br><br><br> <br><br><br><br> <br><br><br><br>

  <div class="clearfix" style="padding-left:3rem;">
    <img src="/assets/Assets Papaya Fit/Steak rec.png" alt="" class="steak">
    <!-- <button class="btn btn-secondary float-left">Example Button floated left</button> -->
    <div class="float-left" style="margin-left:5rem;">
      <strong style="font-size: 30px;">El mejor plan alimenticio</strong><br>
      <strong style="font-size: 30px;">100% hecho para ti</strong><br><br>
      <div style="text-align: justify; width: 400px;">
        <strong style="font-size: 18px; color:#FF9D00">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna
          aliqua.
        </strong>
        <br><br>
        <h5>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi
          consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
        </h5><br><br>

        <div class="row"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
          <h4 style="padding-left: 2rem; color:#FF9D00 ">Más de 15 menús mensuales</h4>
        </div>
        <h4 style="padding-left:4rem; color:#FF9D00 ">100% perzonalizados</h4><br>

        <div class="row"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
          <h4 style="padding-left: 2rem; color:#FF9D00;">Se ajusta a todo tipo de rutinas</h4>
        </div>
        <h4 style="padding-left:4rem; color:#FF9D00">y estilos de vida</h4><br>

        <div class="row"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
          <h4 style="padding-left: 2rem; color:#FF9D00;">Sin necesitar de calendarización</h4>
        </div><br>

        <div class="row"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
          <h4 style="padding-left: 2rem; color:#FF9D00 ">Seguimiento 24 hrs</h4>
        </div>
      </div>

    </div>
  </div>

  <div class="row" style="padding-left:60px; padding-top: 5rem;">
    <div class="divnutri">
      <img style="border-radius: 13px; width: 24rem; height: 27rem;" src="/assets/Assets Papaya Fit/Foto Doctora.png"
        alt="" class=""><br><br>
      <strong style="font-size: 20px; color:#FF9D00">Dr.Nombre Apellido</strong><br>
      <strong style="font-size: 15px; color:#696969; ">Nutriólogo General</strong>
      <p style="text-align:justify; font-size: 15px; color: #696969; padding-top: 2rem;">Lorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
      <p style="color:#FF9D00"> <img class="sobre" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">
        hola@papayafit.com</p>
    </div>

    <div class="divnutri">
      <img style="border-radius: 13px; width: 24rem; height: 27rem;" src="/assets/Assets Papaya Fit/Foto Doctora.png"
        alt="" class=""><br><br>
      <strong style="font-size: 20px; color:#FF9D00">Dr.Nombre Apellido</strong><br>
      <strong style="font-size: 15px; color:#696969; ">Nutriólogo General</strong>
      <p style="text-align:justify; font-size: 15px; color: #696969; padding-top: 2rem;">Lorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
      <p style="color:#FF9D00"> <img class="sobre" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">
        hola@papayafit.com</p>
    </div>

    <div class="divnutri">
      <img style="border-radius: 13px; width: 24rem; height: 27rem;" src="/assets/Assets Papaya Fit/Foto Doctora.png"
        alt="" class=""><br><br>
      <strong style="font-size: 20px; color:#FF9D00">Dr.Nombre Apellido</strong><br>
      <strong style="font-size: 15px; color:#696969; ">Nutriólogo General</strong>
      <p style="text-align:justify; font-size: 15px; color: #696969; padding-top: 2rem;">Lorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
      <p style="color:#FF9D00"> <img class="sobre" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">
        hola@papayafit.com</p>
    </div>
    <div style="padding-top: 6rem; padding-left: 36rem;">
      <a href="comenzar">
        <button class="btncomienza" style="font-size: 19px;  font-family: 'Open Sans';">Comienza tu plan</button>
      </a>
    </div>
  </div>
  <footer style="background-color:#fff;" class="imagenfooter clearfix">

    <div class="float-left">
      <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" alt="" class="papayalogofooter">
    </div><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
    <div class="row" style="margin-left: 26rem; align-self: center; margin-top: 20rem;">


      <h3 style="color:#fff; font-size: 18px;"><strong>Inicio</strong><br></h3>
      <h3 style="margin-left:4rem; color:#fff; font-size:18px;"><strong>Nosotros</strong><br></h3>
      <h3 style="margin-left:4rem;color:#fff; font-size:18px;"> <strong>FAQ</strong> <br> </h3>
      <h3 style="margin-left:4rem;color:#fff; font-size:18px;"> <strong>Blog</strong> </h3>


      <div class="row float-right" style="padding-left: 8rem;">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt="">
      </div>
    </div>
    <div style="margin-left: 26rem; color: #fff;align-self: center;margin-top: 1px;">
      <p>__________________________________________________________</p>
    </div>
    <div class="row" style="margin-left:26rem;">
      <small style=" margin-left:25px;color:#fcbd6b; font-size: 13px;"> Seguridad</small>
      <small style=" margin-left:25px;color:#fcbd6b; font-size: 13px;">Aviso de Privacidad</small>
      <small style=" margin-left:25px;color:#fcbd6b; font-size: 13px;">Términos y Condiciones</small>
    </div>

    <div style=" margin-top: 2rem;">
      <small style="margin-left: 17rem; color: #fff;">
        @PapayaFit, 2019, Todos los derechos reservados
        <a href="" class="link-powered">
          Supernova Apps
        </a>
      </small>

    </div>


  </footer>

</body>

</html>