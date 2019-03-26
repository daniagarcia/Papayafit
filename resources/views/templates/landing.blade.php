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
    <link rel="stylesheet" href="/css/productos.min.css">
    <link rel="stylesheet" href="/css/dashboard.min.css">
    @yield('meta')

    <link rel="shortcut icon" href="/assets/images/logos/selectonerlogop5.png">
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


    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #ffd261">
      <a class="navbar-brand" href="/">
        <!-- <img src="/assets/" alt="Logotipo" class="img-fluid"> -->
        <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png"  alt="Logotipo" style="width: 60px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <!-- <h5 class="my-2 my-sm-0 texto p-2"> <strong>Iniciar Sesión</strong> </h5> -->
          <button style="background-color:#b2cd45 ;" class="btn btn-succsess my-2 my-sm-0 textobtn" type="submit"><strong>Comienza</strong></button>
        </form>
      </div>
    </nav>
    @section('content')
   
@endsection

    <div class="">
      <div class="">
        <div class="">
          <div id="">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

    <footer style="background-color:#fff;" class="imagenfooter clearfix">
       
       <div  class="float-left">
         <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" alt="" class="papayalogofooter">
       </div>
       <div class="row"  style="margin-left: 26rem; align-self: center; margin-top: 20rem;">
       
          
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
       <div style="margin-left: 26rem; color: #fff;align-self: center;margin-top: 1px;"><p>__________________________________________________________</p></div>
     <div class="row" style="margin-left:26rem;">
       <small style=" margin-left:25px;color:#fcbd6b; font-size: 13px;"> Seguridad</small>
       <small style=" margin-left:25px;color:#fcbd6b; font-size: 13px;">Aviso de Privacidad</small>
       <small style=" margin-left:25px;color:#fcbd6b; font-size: 13px;">Términos y Condiciones</small>
     </div>
     
     <div style=" margin-top: 2rem;">
         <small style="margin-left: 17rem; color: #fff;">
             @PapayaFit, 2019, Todos los derechos reservados
             <!-- <a href="" class="link-powered">
               Supernova Apps
             </a> -->
           </small>
 
     </div>
   
     
     </footer>
  

    @yield('js')
  </body>
</html>