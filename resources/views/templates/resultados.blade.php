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
Resultados
@endsection

@section('css')
<link rel="stylesheet" href="/css/home.min.css">

@endsection

@section('content')

<div class="clearfix back-res" style="">

  <div class="float-left">
    <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png"
      class="papaya-logoo" alt="">
  </div>
  <div class="float-right div-congrats">

    <strong class="text-congrats">¡Felicidades!</strong>
    <div style="">
      <p class="text2-congrats">Sabemos lo difícil que pueden ser los cambios, y este es tu
        primer paso hacia una mejor nutrición</p>

    </div>
    <div style="padding-left: 12rem;">
      <a href="/pasouno">
        <button class="btncomienza" style="font-size: 19px;  font-family: 'Open Sans';">Descarga tu
          plan</button>
      </a>
    </div>
  </div>
</div>

<div>
  <div class="clearfix">
    <div class="div-resumen float-left">
      <strong class="resumen">Resumen de tu perfil</strong>
    </div>
    <div class="container-fluid">
      <div class="float-right row" style="padding-right: 6rem;">
        <div class="divdatos">
          <img class="icondatos" src="/assets/Assets Papaya Fit/resultados/event.png" alt="">        
          <h4 style="color:#696969" id="edadinfo" ></h4>
        </div>
        <div class="divdatos">
          <img class="icondatos" src="/assets/Assets Papaya Fit/resultados/resize.png" alt="">
          <h4 style="color:#696969" id="alturainfo"></h4>
        </div>
        <div class="divdatos" style="border-color: transparent !important;">
          <img class="icondatos" src="/assets/Assets Papaya Fit/resultados/weight-scale.png" alt="">
          <h4 style="color:#696969" id="pesoinfo"></h4>
        </div>

      </div>
    </div>


  </div>

  <div class="container-fluid">

    <div style="padding-top: 3rem;" class="row">
      <div class="sombraprecios div-resultados">
        <div
          class="head-resultados">
          <div style="padding-top:1rem;">
            <strong class="title-card">BMI</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>
        <div style="">
          <img style="margin-left: 3rem; margin-top: 2rem; width: 20rem;" src="/assets/Assets Papaya Fit/resultados/speedometer.png" alt="">
          <div class="row" style="padding-left: 7rem; padding-top: 4rem">
            <p class="text-weight">Tu peso es <br> </p>
            <p class="text-weight-res" id="imc"></p>
          </div>
        </div>
      </div>
      <div class="sombraprecios div-resultados">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:1rem;">
            <strong class="title-card">Edad Metabólica</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>
        <div style="">
          <img class="img-age" src="/assets/Assets Papaya Fit/resultados/happy.png" alt="">
          <div class="row" style="padding-left: 3rem; padding-top: 3rem">
            <p style="font-size: 20px;color: #696969; font-weight: bold;">Tu edad metabólica <br> </p><br>
            <p style="font-size: 20px;color: #696969; font-weight: bold;">es de <br>
              <p style="font-size: 20px;color: #FF9D00; font-weight: bold;" id="edadm"></p>
            </p>
          </div>
        </div>
      </div>
      <div class="sombraprecios div-resultados">
        <div class="head-resultados">
          <div style="padding-top:1rem;">
            <strong class="title-card">Requerimiento energético</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>
        <div style="padding:2rem;">
          <img style="width: 22rem; height: 12rem;" src="/assets/Assets Papaya Fit/resultados/graphic.png" alt="">
          <div class="row" style="padding-left: 1rem; padding-top: 3rem">
            <p style="font-size: 20px;color: #696969; font-weight: bold;">Calorias recomendadas:<br> </p><br>
            <p style="font-size: 20px;color: #FF9D00; font-weight: bold;" id="kal"></p>
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="container-fluid">
    <div class="row" style="padding-top: 3rem;">
      <div class="sombraprecios div-resultados">
        <div class="head-resultados">
          <div style="padding-top:1rem;">
            <strong class="title-card">Agua Recomendada</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>
        <div style="">
          <img style="width: 12rem; margin-left: 7rem;  margin-top: 2rem;
          height: 12rem" src="/assets/Assets Papaya Fit/resultados/Group.png" alt="">
          <div class="row" style="padding-left: 6rem; padding-top: 3rem">
            <p style="font-size: 20px;color: #FF9D00; font-weight: bold;" id="agua"><br></p><br>
            <p style="font-size: 20px;color: #696969; font-weight: bold;"> de agua al día<br> </p>

          </div>
        </div>
      </div>
      <div
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:1rem;">
            <strong style="font-size:25px; color:#fff;">Peso recomendado</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>

        <div style="padding:1rem;">
          <strong style="font-size: 100px;color: #FF9D00" id="rec"></strong>
          <p style="font-size: 25px; color: #696969; font-weight: bold;">Peso alcanzable durante el primer mes de tu
            plan de
            alimentación</p>
          <p style="font-size: 10px; color: #696969"></p>
        </div>
      </div>
      <div class="sombraprecios div-resultados">
      <div
        style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
        <div style="padding-top:0.5rem;">
          <img style="height: 58px;" src="/assets/Assets Papaya Fit/OM.png" alt="">
          <strong class="title-card"></strong>
        </div>
      </div>
      <div style="padding:2rem;">
        <div class="row" style="">
            <p style="text-align: center; font-size: 21px;color: #696969; font-weight: bold;" id="mensaje"><br> </p>
            
        </div>
      
      </div>
    </div>
   

    </div>
   <div
        style="padding-top: 3rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="">

        <div style="padding:rem;">
          <strong style="font-size: 40px">¿Que esperas para cambiar tu vida?</strong>
          <div style="padding-top: 2rem;">
            <a href="pasouno">
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
<script src="./libs/jquery/jquery.min.js"></script>
<script src="/js/home.min.js"></script>
<script src="./js/quiz.min.js"></script>
<script src="./js/resultados.min.js"></script>
<script src="./js/question.min.js"></script>
@endsection