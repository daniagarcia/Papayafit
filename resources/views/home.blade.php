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
<div class="fondo">
  <!-- @yield('content') -->
  <!-- <br><br> <br><br> <br><br> <br><br>-->
  <div class="my-10">
    <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" alt="Logotipo" class="papayalogo">
  </div>
  <h1 style="padding-left: 50px;" class="textonutricion"><strong>La mejor nutrición</strong></h1>
  <h1 style="padding-left: 50px;" class="textonutricion"><strong>a tu medida en tan</strong></h1>
  <h1 style="padding-left: 50px;" class="textonutricion"><strong>solo 6 pasos.</strong></h1>
  <div class="row" style="padding-left:4rem; padding-top: 2rem;">
  <a href="/comenzar">
  <h3 style="color:#fff;">Comienza <img class="felcha" src="/assets/Assets Papaya Fit/Flecha.png" alt=""> </h3>
  </a>
      
  </div>
</div>

<div class="fondo2">
  <br><br><br><br><br><br><br><br>
  <div style="padding-left: 600px;">
    <h1 class="textonutricion2"><strong>Si tú eres único</strong></h1>
    <h1 class="textonutricion2"><strong>¿por qué tu dieta no?</strong></h1>
    <h5 style="color:#9FC40A;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut
      labore et dolore magna aliqua.</h5>
    <br>
    <div class="textofondo2">
      <div class="row"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
        <h4 style="padding-left: 2rem;">Más de 15 menús mensuales</h4>
      </div>
      <h4 style="padding-left:4rem;">100% perzonalizados</h4><br>

      <div class="row"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
        <h4 style="padding-left: 2rem;">Se ajusta a todo tipo de rutinas</h4>
      </div>
      <h4 style="padding-left:4rem;">y estilos de vida</h4><br>

      <div class="row"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
        <h4 style="padding-left: 2rem;">Sin necesitar de calendarización</h4>
      </div><br>

      <div class="row"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
        <h4 style="padding-left: 2rem;">Seguimiento 24 hrs</h4>
      </div>
      <div style="padding-top: 4rem;">
        <a href="comenzar">
          <button class="btncomienza" style="font-size: 19px;  font-family: 'Open Sans';">Comienza tu plan</button>
        </a>
      </div>

    </div>
  </div>
</div>
<div style="padding-left: 70px;" class="col-12">
  <h1 style="text-align: center;"> <strong>Tu plan perfecto más</strong></h1>
  <h1 style="text-align: center; margin-bottom: 100px;"><strong>fácil que nunca</strong></h1>
  <div class="row col-12">
    <div class="divcards">
      <img src="/assets/Assets Papaya Fit/Icons/computer.png" alt="" class="icono2"><br><br>
      <h3 style="text-align:center; color:#f6a60e">CREA TU CUENTA</h3><br>
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
      <h5 style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor
        incidunt ut labore et dolore magna aliqua.</h5>
    </div>
    <div class="divpantalla" style="padding-left: 90px;">
      <h4 style="color:#f6a60e;"><strong>Nutriólogas Certificadas</strong></h4>
      <h5 style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor
        incidunt ut labore et dolore magna aliqua.</h5>
    </div>
    <div class="divpantalla" style="padding-left: 90px;">
      <h4 style="color:#f6a60e;"><strong>Fácil Acceso</strong></h4>
      <h5 style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor
        incidunt ut labore et dolore magna aliqua.</h5>
    </div>
  </div>

</div>
<div class="row" style="margin-top: 7rem">
  <div style="margin-left: 10rem; width: 250px;margin-top: 4rem">
    <strong style="font-size: 3rem;">Planes a tu </strong>
    <strong style="font-size: 3rem;">medida</strong>
    <h5 style="color: #FF9D00"> labore et dolore magna aliqua.</h5>
    <strong style="padding-top:1rem;">
      <a href="comenzar">
        <p style="color:#FF9D00">Escoge tu plan
          <img style="width: 15px; height: 15px;" src="/assets/Assets Papaya Fit/Vector.png" alt="">
        </p>
      </a>
    </strong>
  </div>

  <!--DIVPRECIOS-->
  <div style="width: 23rem; height: 18rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 4rem;"
    class="sombraprecios">
    <div
      style="width:23rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
      <div style="padding-top:2rem;">
        <strong style="font-size:20px; color:#fff;">Pago Único</strong>
      </div>
    </div>
    <div style="padding:1rem;">
      <strong style="font-size: 70px">$299</strong>
      <p style="font-size: 15px; color: #696969">plan de alimentación mensual de 1 mes con mas de 15 menús a tu
        disposición</p>
      <p style="font-size: 10px; color: #696969">cancela cuando quieras</p>
    </div>
  </div>
  <div
    style="width: 23rem; height: 18rem; border-width: 1px;border-radius: 30px; text-align:center;  margin-left: 4rem;"
    class="sombraprecios">
    <div
      style="width:23rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
      <div style="padding-top:2rem;">
        <strong style="font-size:20px; color:#fff;">Suscripción anual</strong>
      </div>
    </div>
    <div style="padding:1rem;">
      <strong style="font-size: 70px">$199</strong>
      <p style="font-size: 10px; color: #696969">*cargo mensual recurrente</p>
      <p style="font-size: 15px; color: #696969">plan de alimentación mensual más material adicional</p>

    </div>
  </div>

  <!--DIVPRECIOS-->


</div>
<br> <br> <br>
<div style="text-align: center" class="col-12">
  <h1><strong>Bienvenido a la</strong></h1>
  <h1><strong> comunidad más</strong> <strong style="color:#b2cd45">fit</strong>
  </h1>
  <div style="text-align: center">
    <h5 style="color:#f6a60e;">Lorem ipsum dolor sit amet, consectetur
      adipiscing elit
    </h5>
  </div>

</div>
<br>
<div class="row col-12" style="padding-left:60px;">
  <div class="divcomu sombra">
    <img style="border-radius: 150px; width: 150px; height: 150px; margin-left: 80px;"
      src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
    <h3 style="text-align:center;font-size: 20px; color:#000000"> <strong>Humberto Gómez</strong> </h3>
    <p style="text-align:center; color:#f6a60e;">Comunity Manager</p>
    <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
      consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
      consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</h4>
  </div>
  <div class="divcomu sombra">
    <img style="border-radius: 150px; width: 150px; height: 150px; margin-left: 80px;"
      src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
    <h3 style="text-align:center; font-size: 20px; color:#000000"><strong>Susana Aguilar</strong> </h3>
    <p style="text-align:center; color:#f6a60e;">Veterinaria</p>
    <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
      consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
      consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h4>
  </div>
  <div class="divcomu sombra">
    <img style="border-radius: 150px; width: 150px; height: 150px; margin-left: 80px;"
      src="/assets/Assets Papaya Fit/Foto Doctora.png" alt="" class=""><br><br>
    <h3 style="text-align:center;font-size: 20px; color:#000000"> <strong>Alfonso Ojeda</strong> </h3>
    <p style="text-align:center; color:#f6a60e;">Abogado Fiscal</p>
    <h4 style="text-align: center; font-size: 17px">Lorem ipsum dolor sit amet, consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
      consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
      consectetur
      adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</h4>
  </div>
</div>

</div>
@endsection

@section('js')
<script src="/js/home.min.js"></script>
@endsection