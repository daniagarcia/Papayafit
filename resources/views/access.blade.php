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

  <title>Login</title>
</head>

<body>
    <nav  class="navbar navbar-expand-lg fixed-top nav-background" >
        <a style="" class="navbar-brand" href="/">
          <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png"  alt="Logotipo" style=" width: 100px">
        </a>
      
     
      </nav>
  <div class="imagenfootercomenzarr">
    <!-- <div class="clearfix" style="margin-left: 8rem; margin-right: 60px;"> -->
    <div class="" style="margin-left: 10rem; margin-right: 60px;">
      <strong style="font-size:63.9939px;
          line-height: 42px;
          display: flex;
          align-items: center;
          letter-spacing: -0.02em;          
          ">¡Bienvenido!</strong><br>
      <!-- <strong style="font-size: 43.9939px;
          line-height: 42px;
          display: flex;
          align-items: center;
          letter-spacing: -0.02em;">Tu plan de nutrición</strong><br>
      <strong style="font-size: 43.9939px;
          line-height: 42px;
          display: flex;
          align-items: center;
          letter-spacing: -0.02em;">te espera</strong><br> -->
      <p style="padding-top:3rem;font-size: 18.1082px;line-height: 22px;display: flex;align-items: center;text-align: right;letter-spacing: 0.03em;color: #696969; font-weight: bold;
          ">Nombre del usuario:</p>

      <input
        style="width: 516.08px;height: 46.4px;left: 124px;top: 333.09px;background: #EEEDED;border-radius: 11.3176px;"
        type="email" class="form-control" placeholder="" name="email" id="username" value="hola@papayafit.com"><br>
      <p style="font-size: 18.1082px;line-height: 22px;display: flex;align-items: center;text-align: right;letter-spacing: 0.03em;color: #696969; font-weight: bold;
          ">Contraseña:</p>
      <input
        style="width: 516.08px;height: 46.4px;left: 124px;top: 333.09px;background: #EEEDED;border-radius: 11.3176px;"
        type="password" class="form-control" name="Contraseña" id="password" value="">


      <div class="">       
        <label style="font-size:15px;" class="form-check-label" for="exampleCheck1">¿Olvidaste tu contraseña? Recuperalá
          <label for="" style="font-size:15px;color:#FF9D00;">aquí</label> </label>
      </div>
      <div style="padding-top: 2rem;padding-left: 11rem;">
        <button type="button" id="login" title="Entrar" class="" style="width: 183.35px;height: 45.27px;left: 281.32px;top: 544.73px;            
            background: #FF9D00;
            box-shadow: 0px 4.52706px 6.79059px rgba(0, 0, 0, 0.1);
            border-radius: 11.3176px;"><a href="/papayafit" class="link-start" style="
                left: 24.09%;
                right: 72.21%;
                top: 67.49%;
                bottom: 30.46%;
                font-size: 16.9765px;
                line-height: 16px;
                align-items: center;
                letter-spacing: 0.05em;font-weight: bold;
                
                color: #FFFFFF;
                ">Entrar</a></button>
      </div>
    </div>
    <!-- </div> -->
    <div class="container-fluid">
      <div class="row" style="padding-left: 19rem;padding-top: 20rem;">
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



<script src="/js/access.min.js?{{rand()}}"></script>