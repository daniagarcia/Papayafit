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
    @yield('meta')

    <link rel="shortcut icon" href="/assets/Assets Papaya Fit/Logo S/papaya.png">
    @yield('css')

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
    <div class="fondo">
        <!-- @yield('content')    -->
            <br><br> <br><br> <br><br> <br><br>        
            <div class="my-10"> 
                <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png"  alt="Logotipo" class="papayalogo">                  
                </div>
            <h1 style="padding-left: 50px;"class="textonutricion"><strong>La mejor nutrición</strong></h1>
            <h1 style="padding-left: 50px;" class="textonutricion"><strong>a tu medida</strong></h1>
    </div>

      <div class="fondo2">
        <br><br><br><br><br><br><br><br>
        <div style="padding-left: 600px;">
            <h1 class="textonutricion2"><strong>Si tú eres único</strong></h1>
            <h1 class="textonutricion2"><strong>¿por qué tu dieta no?</strong></h1>
            <h3 style="color:green;" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h3>
              <br>              
              <div class="textofondo2">              
                <h4> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono"alt=""> Más de 15 menús mensuales </h4>
                <h4 style="padding-left:50px;">100% perzonalizados</h4><br>
                <h4> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono"alt=""> Se ajusta a todo tipo de rutinas </h4>
                <h4 style="padding-left:50px;">y estilos de vida</h4><br>
                <h4><img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono"alt=""> Sin necesitar de calendarización</h4><br>
                <h4> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono"alt="">Seguimiento 24 hrs</h4>
                <br><br>
                <button class="btncomienza">Comienza tu plan</button>
              </div>            
            </div>
        </div>
        <div style="padding-left: 70px;"class="col-12" >
            <h1 style="text-align: center;"> <strong>Tu plan perfecto más</strong></h1>
            <h1 style="text-align: center; margin-bottom: 100px;"><strong>fácil que nunca</strong></h1>
            <div class="row col-12">           
                <div class="divcards">
                  <img src="/assets/Assets Papaya Fit/Icons/computer.png" alt="" class="icono2"><br><br>
                  <h3 style="text-align:center; color:#f6a60e" >CREA TU CUENTA</h3><br>
                  <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h4>
                </div>         
                <div class="divcards">
                  <img src="/assets/Assets Papaya Fit/Icons/vector.png" alt="" class="icono2"><br><br>
                  <h3 style="text-align:center; color:#f6a60e">TOMA EL QUIZ</h3><br>
                  <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h4>  
                </div>
                <div class="divcards">
                    <img src="/assets/Assets Papaya Fit/Icons/doctor.png" alt="" class="icono2"><br><br>
                    <h3 style="text-align:center; color:#f6a60e">EMPIEZA TU PLAN</h3><br>
                    <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h4>    
                </div>
              </div>
        </div>
        <div class="row">
          <div>
            <img src="/assets/Assets Individuales Papaya Fit/iMac 27_.png" alt="" class="pantalla">
          </div>       
        <div>
            <div class="row" style="padding-left: 90px;">
                <h1><strong>¿Por qué <br></strong></h1>
                <h1 style="color:#f6a60e;"><strong> Papaya Fit</strong></h1>       
             </div>
             <div style="padding-left: 90px;">
                <h1><strong>es tu mejor opción?</strong></h1>
             </div><br>
             <div class="divpantalla" style="padding-left: 90px;">
                <h4 style="color:#f6a60e;"><strong>100% Perzonalizado</strong></h4>
                <h5 style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h5>
             </div>
             <div class="divpantalla" style="padding-left: 90px;">
                <h4 style="color:#f6a60e;"><strong>Nutriólogas Certificadas</strong></h4>
                <h5 style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h5>
             </div>
             <div class="divpantalla" style="padding-left: 90px;">
                <h4 style="color:#f6a60e;"><strong>Fácil Acceso</strong></h4>
                <h5 style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h5>
             </div>             
        </div>
       
      </div>
      <div class="row" style="margin-top: 7rem">          
        <div style="margin-left: 10rem; width: 250px;margin-top: 4rem">
            <h4><strong>Planes a tu</strong></h4>
            <h4><strong>medida</strong></h4>
            <h5 style="color: #f6a60e"> labore et dolore magna aliqua.</h5> 
            <p>Escoge tu plan</p>
           
        </div>
             
              <div class="divprecios" style="width: 21rem; height: 18rem; border-width: 1px;border-style: solid; border-radius: 30px; ">
              
              <div style="background-color: #f6a60e; height: 8rem; border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
                <h5 style="margin-top: 20px; color: #fff; text-align: center;"><strong>Pago único</strong></h5>
              </div>
                  <div style="text-align: center; " >
                    <h1 style="font-size: 80px"> <strong>$299</strong></h1>
                    <p>plan de alimentación mensual de 1 mes con mas de 15 menús a tu disposición</p>
                    <p>cancela cuando quieras</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div>
                <div class="divprecios" style="width: 21rem; height: 18rem; border-width: 1px;border-style: solid; border-radius: 30px;">
              
                  <div style="background-color: #f6a60e; height: 8rem; border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center">
                      <h5 style="margin-top: 20px; color: #fff"><strong>Suscripción anual</strong></h5>
                  </div>
                      <!-- <img class="card-img-top" style="background-color: #f6a60e; height: 70px;" alt=""><h1>as</h1> -->
                      <div style="text-align: center; " >
                        <h1 style="font-size: 80px"> <strong>$199</strong></h1>
                        <p>plan de alimentación mensual de 1 mes con mas de 15 menús a tu disposición</p>
                        <p>cancela cuando quieras</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                      </div>
                    </div>
            
      </div>
      <br> <br> <br>
      <div style="text-align: center" class="col-12">
          <h1><strong>Bienvenido a la</strong></h1>
          <h1><strong> comunidad más</strong> <strong style="color:#b2cd45">fit</strong>          
          </h1>    
          <div style="text-align: center">
              <h5 style="color:#f6a60e;" >Lorem ipsum dolor sit amet, consectetur 
                  adipiscing elit            
               </h5>
          </div>
            
       </div>
      <br>
          <div class="row col-12" style="padding-left:60px;">           
              <div class="divcomu sombra">          
              <img style="border-radius: 150px; width: 150px; height: 150px; margin-left: 80px;" src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
                <h3 style="text-align:center;font-size: 20px; color:#000000"> <strong>Humberto Gómez</strong> </h3>
                <p style="text-align:center; color:#f6a60e;">Comunity Manager</p>
                <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur 
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</h4>
              </div>         
              <div class="divcomu sombra">
                <img style="border-radius: 150px; width: 150px; height: 150px; margin-left: 80px;"  src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
                <h3 style="text-align:center; font-size: 20px; color:#000000"><strong>Susana Aguilar</strong> </h3>
                <p style="text-align:center; color:#f6a60e;">Veterinaria</p>
                <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h4>  
              </div>
              <div class="divcomu sombra">
                  <img style="border-radius: 150px; width: 150px; height: 150px; margin-left: 80px;" src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
                  <h3 style="text-align:center;font-size: 20px; color:#000000"> <strong>Alfonso Ojeda</strong> </h3>
                  <p style="text-align:center; color:#f6a60e;">Abogado Fiscal</p>
                  <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur 
                      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur 
                      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h4>    
              </div>
            </div>
          
      </div>
        
        
      <!-- </div> -->
    <!-- </div> -->

    <footer style="background-color:#fff;" class="imagenfooter clearfix">
        <!-- <div class="bg-info clearfix">
            <button type="button" class="btn btn-secondary ">Example Button floated left</button>
            <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
          </div> -->
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
