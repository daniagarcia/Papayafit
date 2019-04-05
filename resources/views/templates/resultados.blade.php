@extends('templates.landing')

@section('meta')
<meta name="Title" content="">
<meta name="keywords" content="your, tags" />
<meta name="description" content="150 words" />
{{-- Facebook --}}
<meta property="og:type" content="website" />
<meta property='og:url' content="{{ env('APP_URL') }}/[ruta]" />
<meta property="og:title" content="TITULO DE LA PAGINA" />
<meta property="og:description" content="BREVE DESCRIPCIÓN" />
<meta property="og:image" content="URL DE IMAGEN CORRESPONDIENTE 1200px ANCHO X 630px ALTO" />
@endsection

@section('title')
Inicio
@endsection

@section('css')
<link rel="stylesheet" href="/css/home.min.css">
@endsection

@section('content')

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
      <div class="float-right row" style="padding-right: 6rem;">
        <h4 style="color:#696969">26 años</h4>
        <h4 style="color:#696969">1.61 m</h4>
        <h4 style="color:#696969">67 kg</h4>
      </div>

    </div>

    <div style="padding-top: 3rem;" class="row">
      <div
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26   rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
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
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
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
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
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
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
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
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
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
        style="width: 28rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="">
      
        <div style="padding:rem;">
          <strong style="font-size: 40px">¿Que esperas para cambiar tu vida?</strong>
          <div style="padding-top: 2rem;">
            <a href="">
              <button class="btncomienza" style="font-size: 19px;  font-family: 'Open Sans';">Descarga tu
                plan</button>
            </a>
          </div>
          
        </div>
      </div>

    </div>

  </div>

@endsection

@section('js')
<script src="/js/home.min.js"></script>
<script src="./js/quiz.min.js"></script>
<script src="./js/resultados.min.js"></script>
@endsection

<!-- <!DOCTYPE html>
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
      <div class="float-right row" style="padding-right: 6rem;">
        <h4 style="color:#696969">26 años</h4>
        <h4 style="color:#696969">1.61 m</h4>
        <h4 style="color:#696969">67 kg</h4>
      </div>

    </div>

    <div style="padding-top: 3rem;" class="row">
      <div
        style="width: 28rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 5rem;"
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
      
        <div style="padding:rem;">
          <strong style="font-size: 40px">¿Que esperas para cambiar tu vida?</strong>
          <div style="padding-top: 2rem;">
            <a href="">
              <button class="btncomienza" style="font-size: 19px;  font-family: 'Open Sans';">Descarga tu
                plan</button>
            </a>
          </div>
          
        </div>
      </div>

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

</html> -->