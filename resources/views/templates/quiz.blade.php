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
              <br><br><br><br>    <br><br><br><br>

              <div style="margin-left: 35rem; width: 390px; text-align: center;">
                           <h1>¿QUE TE GUSTARÍA LOGRAR?</h1> <br> <br>
    
                  <button class="btncomienza">Bajar de peso disminuyendo % de grasa</button><br><br>
                  <button class="btncomienza">Solo adquirir buenos hábitos alimenticios</button> <br><br>
                  <button class="btncomienza">Aumentar mi peso de manera saludable</button>
              </div>
              <br><br><br><br>    <br><br><br><br>

              <div style="margin-left: 35rem; width: 390px; text-align: center;">
                           <h1>SEXO</h1> <br> <br>
    
                  <button class="btncomienza">MASCULINO</button><br><br>
                  <button class="btncomienza">FEMENINO</button> <br><br>
              
              </div>
              <br><br><br><br>    <br><br><br><br>
              <div style="margin-left: 35rem; width: 390px; text-align: center;">
                    <h1>ACTIVIDAD FÍSICA</h1> <br> <br>

                <button class="btncomienza">Casi nunca</button><br><br>
                <button class="btncomienza">Hago ejercicio 3 veces por semana</button> <br><br>
                <button class="btncomienza">Hago ejericio más de 5 veces por semana</button> <br><br>
       
            </div>
            <br><br><br><br>    <br><br><br><br>
            <div style="margin-left: 35rem; width: 390px; text-align: center;">
                  <h1>DESCRIBE UN DÍA TÍPICO</h1> <br> <br>

              <button class="btncomienza">Paso la mayor parte del día fuera de casa</button><br><br>
              <button class="btncomienza">Me muevo fuera de casa pero como en casa</button> <br><br>
              <button class="btncomienza">Paso la mayor parte del tiempo en casa</button> <br><br>
     
          </div>
          <br><br><br><br>    <br><br><br><br>
          <div style="margin-left: 35rem; width: 390px; text-align: center;">
                <h1>CON QUÉ OPCIÓN TE IDENTIFICAS</h1> <br> <br>

            <button class="btncomienza">Casi nunca</button><br><br>
            <button class="btncomienza">Hago ejercicio 3 veces por semana</button> <br><br>
            <button class="btncomienza">Hago ejericio más de 5 veces por semana</button> <br><br>
   
        </div>

        <br><br><br><br>    <br><br><br><br>
        <div style="margin-left: 35rem; width: 390px; text-align: center;">
              <h1>CON QUÉ OPCIÓN TE IDENTIFICAS</h1> <br> <br>
              <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                          
                        <input type="checkbox" aria-label="Checkbox for following text input">
                      </div>
                    </div>
                    <h3>Mi debilidad es lo dulce</h3>
                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
             </div>
             
             <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                          
                        <input type="checkbox" aria-label="Checkbox for following text input">
                      </div>
                    </div>
                    <h3>Me gusta mucho la comida frita y grasosa</h3>
                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
             </div>
             
             <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                          
                        <input type="checkbox" aria-label="Checkbox for following text input">
                      </div>
                    </div>
                    <h3>Bebo refresco</h3>
                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
             </div>
             
             <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                          
                        <input type="checkbox" aria-label="Checkbox for following text input">
                      </div>
                    </div>
                    <h3>Consumo alcohol los fines de semana</h3>
                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
             </div>
             <div class="input-group">
                    <div class="">
                      <div class="">
                          
                        <input type="checkbox" aria-label="Checkbox for following text input">
                      </div>
                    </div>
                    <h3>Normalmente añado sal a los alimentos</h3>
                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
             </div>
             <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                          
                        <input type="checkbox" aria-label="Checkbox for following text input">
                      </div>
                    </div>
                    <h3>Ninguna de las anteriores</h3>
                    <!-- <input type="text" class="form-control" aria-label="Text input with checkbox"> -->
             </div>
             
                  
      </div>
    

    


    <footer style="background-color:#fff;" class="imagenfooter clearfix">
          
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
                <a href="" class="link-powered">
                  Supernova Apps
                </a> 
              </small>
    
        </div>
      
        
        </footer>
     
</body>
</html>