<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="url" content="{{ env('APP_URL') }}">
    <meta name="api" content="{{ env('API_URL') }}" id="api-url">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="csrf-token" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/assets/images/logos/selectonerlogop5.png">

    <link rel="stylesheet" href="/css/dashboard.min.css?{{rand()}}">
    <link rel="stylesheet" href="/css/productos.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.13.4/dist/bootstrap-table.min.css">

    
    <script src="./menuLinks.js"></script>


    @yield('css')
    <link rel="stylesheet" href="/css/landingpapaya.min.css">



    <title>Papaya Fit</title>
  </head> 
  <br><br><br><br><br>
  <body>

    <audio id="sound-success" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-error" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-info" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-warning" src="/assets/sounds/success.mp3"></audio>

    <!-- <div id="dashboard"></div> -->
   
    
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
        
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div id="root-content">
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
  
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="/libs/jquery/jquery.min.js"></script>
    <script src="/libs/grasp_mobile_progress_circle-1.0.0.min.js" charset="utf-8"></script>
    <script src="/libs/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.6.2/core.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.13.4/dist/bootstrap-table.min.js"></script>
    <script src="/js/dashboard.min.js?{{rand()}}"></script>

    <script>
    
      function exit()
      {
        localStorage.clear();
        window.location.href = '/';
      }

    </script>
    @yield('js')
    
@section('js')
<script src="./js/product.min.js"></script>
@stop
  </body>
</html>