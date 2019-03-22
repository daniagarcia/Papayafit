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
        
    <title>Nosotros</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #fff;"> 
                <a class="navbar-brand" href="/">
                  <!-- <img src="/assets/" alt="Logotipo" class="img-fluid"> -->
                  <!-- <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png"  alt="Logotipo" style="width: 60px;"> -->
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
                      <a class="nav-link texto" href="#"><strong>Blog</strong></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link texto" href="#">|</a>
                    </li>
                    <li>
                            <img  src="/assets/Assets Papaya Fit/Logo Sin Papaya con Slogan rec.png"  alt="Logotipo" style="width:500px ; padding-right:10rem;margin-left: 20rem;">

                    </li>

                  </ul>
                  
                  <form class="form-inline my-2 my-lg-0">

                    <!-- <h5 class="my-2 my-sm-0 texto p-2"> <strong>Iniciar Sesión</strong> </h5> -->
                    <button style="background-color:#b2cd45 ;" class="btn btn-succsess my-2 my-sm-0 textobtn" type="submit"><strong>Comienza</strong></button>
                  </form>
                </div>
              </nav>
              <br><br><br><br>    <br><br><br><br>    <br><br><br><br>

              <div class="clearfix">
                    <img src="/assets/Assets Papaya Fit/Steak rec.png" alt="" class="steak">
                    <!-- <button class="btn btn-secondary float-left">Example Button floated left</button> -->
                    <div class="float-left" style="margin-left:5rem;">
                        <h1>El mejor plan alimenticio</h1>
                        <h1>100% hecho para ti</h1><br><br>
                        <div style="text-align: justify; width: 400px;">
                                <strong style="font-size: 18px; color:#f6a60e;">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. 
                                </strong>
                                <br><br>
                                <h5>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                                </h5><br><br>

                                <div class="textofondo2">              
                                        <h4> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono"alt=""> Más de 15 menús mensuales </h4>
                                        <h4 style="padding-left:50px;">100% perzonalizados</h4><br>
                                        <h4> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono"alt=""> Se ajusta a todo tipo de rutinas </h4>
                                        <h4 style="padding-left:50px;">y estilos de vida</h4><br>
                                        <h4><img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono"alt=""> Sin necesitar de calendarización</h4><br>
                                        <h4> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono"alt="">Seguimiento 24 hrs</h4>
                                      </div> 

                        </div>
                    
                    </div>
                  </div>

                  <div class="row col-12" style="padding-left:60px;">           
                        <div class="divnutri sombra">          
                        <img style="border-radius: 13px; width: 23rem; height: 25rem;" src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
                          <h3 style="text-align:center;font-size: 20px; color:#f6a60e"> <strong>Dr.Nombre Apellido</strong> </h3>
                          <p style="text-align:center; color:#000000;">Nutriólogo General</p>
                          <p style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur 
                            adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                            adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
                        </div>         
                        <div class="divnutri sombra">
                          <img style="border-radius: 13px; width: 23rem; height: 25rem;"  src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
                          <h3 style="text-align:center; font-size: 20px; color:#000000"><strong>Dr.Nombre Apellido</strong> </h3>
                          <p style="text-align:center; color:#f6a60e;">Veterinaria</p>
                          <p style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                              adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                              adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                              adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>  
                        </div>
                        <div class="divnutri sombra">
                            <img style="border-radius: 13px; width: 23rem; height: 25rem;" src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
                            <h3 style="text-align:center;font-size: 20px; color:#000000"> <strong>Dr.Nombre Apellido</strong> </h3>
                            <p style="text-align:center; color:#f6a60e;">Abogado Fiscal</p>
                            <p style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>    
                        </div>
                      </div>
                      
    <!-- <div class="">
        <div>
                <div style="float: left;">
                <img src="/assets/Assets Papaya Fit/Steak.png" alt="" class="steak">

                        <h1>HOLAAAAA</h1>
                    </div>
        </div>
        
    </div> -->

    <footer style="background-color:#fff;" class="imagenfooter clearfix">
            <!-- <div class="bg-info clearfix">
                <button type="button" class="btn btn-secondary ">Example Button floated left</button>
                <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
              </div> -->
          <div  class="float-left">
            <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" alt="" class="papayalogofooter">
          </div><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
          <div class="row"  style="margin-left: 26rem; align-self: center; margin-top: 2    0rem;">
          
             
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
     
</body>
</html>