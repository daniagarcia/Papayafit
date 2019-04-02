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

  <title>Resultados</title>
</head>

<body>

  <div class="clearfix fondores" style="">
    <div class="float-right" style="padding-top: 8rem;">
      <div style="padding-left: 14rem;">
        <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" style="width: 15rem; height: 16rem;" alt="">
      </div>
      <strong style="font-size: 7rem; color:#fff;">¡Felicidades!</strong>
      <div style="width: 573px; text-align: -webkit-center;">
        <p style="color:#be6301; font-size: 24px;">Sabemos lo difícil que pueden ser los cambios, y este es tu
          primer paso hacia una mejor nutrición</p>

      </div>
      <div style="padding-left: 12rem;">
        <a href="">
          <button class="btncomienza" style="font-size: 19px;  font-family: 'Open Sans';">Descarga tu
            plan</button>
        </a>
      </div>
    </div>
  </div>

  <div>
    <div class="clearfix">
        <div style="width: 22rem; padding-left: 4rem;" class="float-left">
            <strong style="font-size: 3rem;color: #696969">Resumen de tu perfil</strong>      
          </div>
          <div  class="float-right row" style="padding-right: 6rem;">
            <h4 style="color:#696969">26 años</h4 >
            <h4 style="color:#696969">1.61 m</h4 >
            <h4 style="color:#696969">67 kg</h4 >
          </div>

    </div>

    <div style="padding-top: 3rem;" class="row">
      <div style="width: 28rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 5rem;"
        class="sombraprecios">
        <div
          style="width:28rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:2rem;">
            <strong style="font-size:20px; color:#fff;">BMI</strong>
          </div>
        </div>
        <div style="padding:1rem;">
          <strong style="font-size: 70px"></strong>
          <p style="font-size: 15px; color: #696969">Tu peso es normal</p>
          <p style="font-size: 10px; color: #696969"></p>
        </div>
      </div>
      <div
        style="width: 28rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 4rem;"
        class="sombraprecios">
        <div
          style="width:28rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:2rem;">
            <strong style="font-size:20px; color:#fff;">Edad Metabólica</strong>
          </div>
        </div>
        <div style="padding:1rem;">
          <strong style="font-size: 70px"></strong>
          <p style="font-size: 15px; color: #696969">Tu edad metabólica es de 21 años</p>
          <p style="font-size: 10px; color: #696969"></p>
        </div>
      </div>
      <div
        style="width: 28rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 4rem;"
        class="sombraprecios">
        <div
          style="width:28rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:2rem;">
            <strong style="font-size:20px; color:#fff;">Requerimiento energético</strong>
          </div>
        </div>
        <div style="padding:1rem;">
          <strong style="font-size: 70px"></strong>
          <p style="font-size: 15px; color: #696969">Calorias recomendadas:</p>
          <p style="color: #FF9D00">1,898 Cal</p>
          <p style="font-size: 10px; color: #696969"></p>
        </div>
      </div>

    </div>
    <div class="row" style="padding-top: 3rem;">
      <div
        style="width: 28rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 5rem;"
        class="sombraprecios">
        <div
          style="width:28rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:2rem;">
            <strong style="font-size:20px; color:#fff;">Agua Recomendada</strong>
          </div>
        </div>
        <div style="padding:1rem;">
          <strong style="font-size: 70px"></strong>
          <p style="font-size: 15px; color: #696969">2.6.litros de agua al día</p>
          <p style="font-size: 10px; color: #696969"></p>
        </div>
      </div>
      <div
        style="width: 28rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 4rem;"
        class="sombraprecios">
        <div
          style="width:28rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:2rem;">
            <strong style="font-size:20px; color:#fff;">Peso recomendado</strong>
          </div>
        </div>
        <div style="padding:1rem;">
          <strong style="font-size: 70px;color: #FF9D00">61.3 kg</strong>
          <p style="font-size: 15px; color: #696969">Peso alcanzable durante el primer mes de tu plan de
            alimentación</p>
          <p style="font-size: 10px; color: #696969"></p>
        </div>
      </div>
      <div
        style="width: 28rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 4rem;"
        class="">
        <!-- <div
                        style="width:28rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
                        <div style="padding-top:2rem;">
                            <strong style="font-size:20px; color:#fff;">Requerimiento energético</strong>
                        </div>
                    </div> -->
        <div style="padding:rem;">
          <strong style="font-size: 40px">¿Que esperas para cambiar tu vida?</strong>
          <div style="padding-top: 2rem;">
            <a href="">
              <button class="btncomienza" style="font-size: 19px;  font-family: 'Open Sans';">Descarga tu
                plan</button>
            </a>
          </div>
          <!-- <p style="font-size: 15px; color: #696969">Calorias recomendadas:</p>
                        <p style="color: #FF9D00">1,898 Cal</p>
                        <p style="font-size: 10px; color: #696969"></p> -->
        </div>
      </div>

    </div>

  </div>


  <div class="clearfix" style="padding-left:3rem;">
    <!-- <img src="/assets/Assets Papaya Fit/Steak rec.png" alt="" class="steak"> -->
    <!-- <button class="btn btn-secondary float-left">Example Button floated left</button> -->
    <div class="float-left" style="margin-left:5rem;padding-top: 5rem;">
      <strong style="font-size: 39px;">El mejor plan alimenticio</strong><br>
      <strong style="font-size: 39px;">100% hecho para ti</strong><br><br>
      <div style="text-align: justify; width: 400px;">
        <strong style="font-size: 18px; color:#FF9D00">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et
          dolore magna
          aliqua.
        </strong>
        <br><br>
        <h5>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et
          dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea
          commodi
          consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
          Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum
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
    <div class="divnutri2 float-right" style="padding-top:5rem;">
      <img style="border-radius: 13px; width: 28rem; height: 31rem;" src="/assets/Assets Papaya Fit/Foto Doctora.png"
        alt="" class=""><br><br>
      <strong style="font-size: 20px; color:#FF9D00">Dr.Nombre Apellido</strong><br>
      <strong style="font-size: 15px; color:#696969; ">Nutriólogo General</strong>
      <p style="text-align:justify; font-size: 15px; color: #696969; padding-top: 2rem;">Lorem ipsum dolor sit
        amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit
        amet,
        consectetur
        adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
      <p style="color:#FF9D00"> <img class="sobre" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">
        hola@papayafit.com</p>
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