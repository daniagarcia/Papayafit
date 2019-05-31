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

  <link rel="shortcut icon" href="/assets/Assets Papaya Fit/PapayaLogo.png">
  @yield('css')

  @section('css')
  <link rel="stylesheet" href="/css/home.min.css">
  <!-- <link rel="stylesheet" href="/css/landingpapaya.min.css"> -->

  @endsection

  <title>Comenzar</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fff;">
    <div class="" id="">
      <a href="/">
        <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="Logotipo"
          style="width:257px ; padding-right:10rem;">
      </a>
    </div>
  </nav>
<div class="imagenfootercomenzar">
  <div class="clearfix" style="margin-left: 8rem; margin-right: 60px;">
    <strong style="font-family:Open Sans; font-size: 60px;">Tu plan de alimentación</strong> <br>
    <strong style="font-family:Open Sans; font-size: 60px; color:#FF9D00;">perzonalizado </strong> <strong
      style="font-family:Open Sans; font-size: 5rem;">te espera</strong>
    <br> <br>
    <div class="float-left">
        <div style="width: 40rem;">
        <!-- <strong style="font-size: 15px; color: #696969"> Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Doloribus facere minus id, sapiente libero
          debitis iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi
          totam veniam laborum.</strong> -->
      </div>
      <div class="container-fluid">
        <div class="row" style="padding-left:1rem; padding-top: 1rem;">
          <a href="quiz" style="color:#FF9D00">
            <strong style="font-size: 20px;">Comienza el quiz <img style="width: 20px;height: 20px"
                src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
          </a>
        </div>
      </div>
    
    </div>
    </div>
    <div class="container-fluid">
      <div class="row" style="padding-left: 19rem; padding-top: 17rem;">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">       
          <p class="hashtag-papayaa">#papayafit</p>
          
        <br><br>        
      </div>
    </div>
  
      <small style="color:#fff;"> @PapayaFit, 2019, Todos los derechos reservados</small>
</div>
</body>
</html>