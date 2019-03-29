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
  <!-- <link rel="stylesheet" href="/css/home.min.css"> -->
  <link rel="stylesheet" href="/css/landingpapaya.min.css">

  @endsection

  <title>Comenzar</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fff;">
    <div class="" id="">
      <a href="/">
        <img src="/assets/Assets Papaya Fit/Logo Sin Papaya con Slogan rec.png" alt="Logotipo"
          style="width:500px ; padding-right:10rem;">
      </a>
    </div>
  </nav>

  <div class="clearfix" style="margin-left: 8rem; margin-right: 5rem; padding-top: 10rem;">
    <strong style="font-family:Open Sans; font-size: 5rem;">Tu plan de alimentación</strong> <br>
    <strong style="font-family:Open Sans; font-size: 5rem; color:#FF9D00;">perzonalizado </strong> <strong
      style="font-family:Open Sans; font-size: 5rem;">te espera</strong>
    <br> <br>
    <div class="float-left">
      <!-- <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="categoria"> -->
      <div style="width: 40rem;">
        <strong style="font-size: 15px; color: #696969"> Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Doloribus facere minus id, sapiente libero
          debitis iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi
          totam veniam laborum.</strong>
      </div>
      <div class="row" style="padding-left:1rem; padding-top: 1rem;">
        <a href="quiz" style="color:#FF9D00">
          <strong style="font-size: 20px;">Comienza el quiz <img class="felcha"
              src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
        </a>
      </div>
    </div>
    <!-- <div class="float-right" style="text-align: justify;">
      <img src="/assets/Assets Individuales Papaya Fit/Asian Mix.png" alt="" class="categoria">
     
     
      </div> -->
  </div>






  <footer style="background-color:#fff;" class="imagenfootercomenzar">

    <div class="float-left">
      <!-- <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" alt="" class="papayalogofooter"> -->
    </div><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
    <div class="row" style="margin-left: 26rem; align-self: center;">

      <div class="row float-right" style="padding-left: 8rem;">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt="">
      </div>
      <!-- <img src="/assets/Assets Individuales Papaya Fit/Asian Mix.png" alt="" class="categoria"> -->
    </div>

    <div style="">
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