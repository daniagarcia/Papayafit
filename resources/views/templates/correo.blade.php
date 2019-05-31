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
  <link rel="stylesheet" href="/css/landingpapaya.min.css">

  @endsection

  <title>Correo</title>
</head>


<body>
    <nav  class="navbar navbar-expand-lg fixed-top nav-background" >
        <a class="navbar-brand" href="/">
          <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="Logotipo" class="logopapaya-nav">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
  <!-- <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fff;">
    <div class="" id="">
      <a href="/">
        <img src="/assets/Assets Papaya Fit/Logo Sin Papaya con Slogan rec.png" alt="Logotipo"
          style="width:500px ; padding-right:10rem;">
      </a>
    </div>
  </nav> -->
<div class="imagenfootercomenzar">
  <div class="clearfix" style="margin-left: 8rem; margin-right: 60px;">
  <!-- <div class="col-4 my-10">
    <img src="/assets/Assets Papaya Fit/PapayaLogo.png" alt="Logotipo" style="height: 17rem;">
  </div> -->
    <!-- <strong style="font-family:Open Sans; font-size: 60px;">Tu plan de alimentación</strong> <br>
    <strong style="font-family:Open Sans; font-size: 60px; color:#FF9D00;">perzonalizado </strong> -->
     <strong  style="font-family:Open Sans; font-size: 3rem; color:orange"> Paso 1 (Correo electrónico) </strong><br>
     <p style="font-size: 20px;">Introduzca la dirección de correo electrónico donde desee recibir su plan de alimentación</p>
     <input style="height: 3rem;" class="txtinput" type="text" placeholder="" id="">
     <div class="container-fluid">
       <div class="row">
          <div class="form-check"  style="padding-right: 3rem">
              <input style="height: 74px;width: 23px;" type="checkbox" class="form-check-input" id="exampleCheck1">
              <label style="font-size:50px;font-weight: bold; color:#9FC40A; padding-left: 1rem;" class="form-check-label" for="exampleCheck1">$299.00</label>
            </div>
            <div class="form-check">
                <input  style="height: 74px;width: 23px;" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label style="font-size:50px;font-weight: bold; color:#9FC40A;padding-left: 1rem;" class="form-check-label" for="exampleCheck1">$199.00</label>
              </div>
       </div>
     </div>
    
     <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label style="font-size:15px;" class="form-check-label" for="exampleCheck1">Acepto los terminos y condiciones</label>
  </div>
  <div style="padding-top: 4rem;">
        <button class="btn-start" style=""><a href="/pasodos" class="link-start" style="color:#fff; font-size:2rem;">Continuar</a></button>
      </div>
      
      <!-- <input type="text"> -->
    
    <div class="float-left">
        <div style="width: 40rem;">
        <!-- <strong style="font-size: 15px; color: #696969"> Lorem ipsum dolor sit amet consectetur adipisicing
          elit. Doloribus facere minus id, sapiente libero
          debitis iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi
          totam veniam laborum.</strong> -->
      </div>
      <!-- <div class="container-fluid">
        <div class="row" style="padding-left:1rem; padding-top: 1rem;">
          <a href="quiz" style="color:#FF9D00">
            <strong style="font-size: 20px;">Comienza el quiz <img style="width: 20px;height: 20px"
                src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
          </a>
        </div>
      </div> -->
    
    </div>
    </div>
    <div class="container-fluid">
      <div class="row" style="padding-left: 19rem; padding-top: 10rem;">
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