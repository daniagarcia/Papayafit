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
Nosotros
@endsection

@section('css')
<link rel="stylesheet" href="/css/home.min.css">
<link rel="stylesheet" href="/css/nosotros.min.css">
@endsection

@section('content')

<div class="clearfix us-section-one">
  <img src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/hotcakes 1.jpg" alt="" class="steak">  
  <div class="float-left">
    <strong class="us-one-text ">El mejor plan alimenticio</strong><br>
    <strong class="us-one-text ">100% hecho para ti</strong><br><br>
    <div class="div-us">
      <div>
        <strong class="us-title">Misión</strong>
        <p>
          Papaya fit ofrece la mejor experiencia de bienestar a cada individuo brindando planes de alimentación
          flexibles a estudiantes optimistas, maestros, trabajadores de oficina comprometidos, amas de casa creativas,
          amantes del fitness, entre otros; para alcanzar objetivos de manera sencilla a bajo coste a través de sus
          innovadoras soluciones. Además de promover el estilo de vida saludable y seguir en la renovación constante
          hasta alcanzar la mejor versión de uno mismo. Brindar un servicio práctico de alta calidad y confiabilidad.
        </p>
        <strong class="us-title">Visión</strong>
        <p>
          Ser la empresa numero 1 a nivel mundial en servicios de bienestar. Así como ser considerados por nuestros
          clientes como una opción viable que ofrece soluciones y servicios basados principalmente en la practicidad,
          creatividad, servicio y calidad que supere sus expectativas. Además de la practicidad y bajo coste
          distinguiéndose de la competencia, de manera que su valor añadido sea extraordinario y único.
        </p>
      </div>
      <div  class="paragraph-four">
      <div class="container-fluid">
      <div class="row"> 
        <div class="col-12">
          <div class="row">
              <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
              <h4 style="padding-left: 2rem">Más de 15 menús mensuales</h4>
          </div>           
        </div>        
        </div>
        <h4 style="padding-left:4rem; ">100% perzonalizados</h4><br>
      </div>     

        <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="row">
                    <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
                    <h4 style="padding-left: 2rem;">Se ajusta a todo tipo de rutinas</h4>
                </div>                 
              </div>
            </div>
        <h4 style="padding-left:4rem;">y estilos de vida</h4><br>

        </div>        

        <div class="container-fluid">
            <div class="row"> 
              <div class="col-12">
                <div class="row">
                    <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
                    <h4 style="padding-left: 2rem;">Sin necesitar de calendarización</h4>                  
                </div>               
              </div>
            </div><br>
        </div>

        <div class="container-fluid">
            <div class="row"> 
              <div class="col-12">
                <div class="row">
                    <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
                    <h4 style="padding-left: 2rem;">Seguimiento 24 hrs</h4>
                </div>
                  
              </div>       
            </div>
        </div>     
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="row us-section-two">
      <div class="col-12">
        <div class="row">
            <div class="us-div-nutri">
                <img class="img-nutri" src="/assets/Assets Papaya Fit/Foto Doctora.png"
                  alt="" class="">
                <strong class="name-nutri">Dr.Nombre Apellido</strong><br>
                <strong class="profession-nutri">Nutriólogo General</strong>
                <p style="text-align:justify; font-size: 15px; color: #696969; padding-top: 2rem;">Lorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
                <p style="color:#FF9D00"> <img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">
                  hola@papayafit.com</p>
              </div>
            
              <div class="us-div-nutri">
                <img class="img-nutri" src="/assets/Assets Papaya Fit/Foto Doctora.png"
                  alt="" class="">
                <strong class="name-nutri">Dr.Nombre Apellido</strong><br>
                <strong class="profession-nutri">Nutriólogo General</strong>
                <p style="text-align:justify; font-size: 15px; color: #696969; padding-top: 2rem;">Lorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
                <p style="color:#FF9D00"> <img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">
                  hola@papayafit.com</p>
              </div>
            
              <div class="us-div-nutri">
                <img class="img-nutri" src="/assets/Assets Papaya Fit/Foto Doctora.png"
                  alt="" class="">
                <strong class="name-nutri">Dr.Nombre Apellido</strong><br>
                <strong class="profession-nutri">Nutriólogo General</strong>
                <p style="text-align:justify; font-size: 15px; color: #696969; padding-top: 2rem;">Lorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
                <p style="color:#FF9D00"> <img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">
                  hola@papayafit.com</p>
              </div>
              <div class="us-div-nutri">
                <img class="img-nutri" src="/assets/Assets Papaya Fit/Foto Doctora.png"
                  alt="">
                <strong class="name-nutri">Dr.Nombre Apellido</strong><br>
                <strong class="profession-nutri">Nutriólogo General</strong>
                <p style="text-align:justify; font-size: 15px; color: #696969; padding-top: 2rem;">Lorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet,
                  consectetur
                  adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua..</p>
                <p style="color:#FF9D00"> <img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">
                  hola@papayafit.com</p>
              </div>
              <div style="padding-top: 10rem; padding-left: 32rem;">
                <a href="comenzar">
                  <button class="btn-start" style="font-size: 19px;  font-family: 'Open Sans';">Comienza tu plan</button>
                </a>
              </div>

        </div>
        

      </div>
       
      </div>
      

</div>

@endsection

@section('js')
<script src="/js/home.min.js"></script>
<!-- <script>
function changeColor(id)
{
    document.getElementById("navnaranja").style.backgroundColor= "#fff";
  
}


</script> -->

@endsection
