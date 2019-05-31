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
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
@endsection

@section('title')
Inicio
@endsection

@section('css')
<link rel="stylesheet" href="/css/home.min.css">
@endsection

@section('content')
<div class="image-back">

<div class="col-md-6">

  <div class="row">
    <div class="col-md-12 mt-5">
      <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="Logotipo" class="logopapaya">    
    </div>
    <div class="col-md-12">
      <h1 class="section-one-text"><strong>La mejor nutrición</strong></h1>
      <h1 class="section-one-text"><strong>a tu medida en tan</strong></h1>
      <h1 class="section-one-text"><strong>solo 7 pasos.</strong></h1>
      <p>Planes de alimentación prácticos, ricos y variados. En papaya fit no nos adaptamos al alimento, lo adaptamos a tu
      estilo de vida! En tan solo 7 clics. Alcanzar tu objetivo nunca fue tan fácil</p>
      <h3><a href="/comenzar" class="link-start">Comienza <img class="felcha" src="/assets/Assets Papaya Fit/Flecha.png" alt=""></a> </h3>
    </div>

  </div>
  
</div>
<div class="col-md-6">
  
</div>
  <!-- <div class="col-4 my-10">
    <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="Logotipo" class="logopapaya">
  </div>
  <div class="col-12 paragraph-one">
    <h1 class="section-one-text"><strong>La mejor nutrición</strong></h1>
    <h1 class="section-one-text"><strong>a tu medida en tan</strong></h1>
    <h1 class="section-one-text"><strong>solo 7 pasos.</strong></h1>
  </div>

  <div class="col-10 paragraph-two">
    <p>Planes de alimentación prácticos, ricos y variados. En papaya fit no nos adaptamos al alimento, lo adaptamos a tu
      estilo de vida! En tan solo 7 clics. Alcanzar tu objetivo nunca fue tan fácil</p>
  </div>
  <div class="container-fluid">
    <div class="row start-btn">
      <div class="col-12">

        <h3><a href="/comenzar" class="link-start">Comienza <img class="felcha"
              src="/assets/Assets Papaya Fit/Flecha.png" alt=""></a> </h3>
      </div>

    </div>
  </div> -->

</div>



<div class="image-back2">
  <div class="div-section2">
    <div class="paragraph-three">
      <strong>Si tú eres único,</strong>
      <strong>¿por qué tu dieta no?</strong>
    </div>
    <div class="paragraph-four">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt="">
              <h4 style="padding-left: 2rem;">Más de 15 menús mensuales</h4>

            </div>
            <h4 style="padding-left:4rem;">100% perzonalizados</h4><br>
          </div>
        </div>

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
        </div>
      </div><br>
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

      <div style="padding-top: 4rem;">
        <button class="btn-start" style=""><a href="/comenzar" class="link-start">Comienza tu plan </a></button>
      </div>

    </div>
  </div>
</div>

<div class="sectionthree">
  <div class="paragraph-five">
    <h1> <strong>Tu plan perfecto más</strong></h1>
    <h1><strong>fácil que nunca</strong></h1>
  </div>


  <div class="container-fluid">
    <div class="row ">
      <div class="col-12">
        <div class="row">
          <div class="divcards">
            <img src="/assets/Assets Papaya Fit/Icons/vector.png" alt="" class="icono2">
            <div style="padding-top:2rem;">
              <h3 class="titlecards">TOMA EL QUIZ</h3>
              <h4 class="textcards">Queremos conocerte! En tan solo 6 clics sabremos lo
                necesario
                para formar tu plan perfecto.</h4>
            </div>
          </div>
          <div class="divcards">
            <img src="/assets/Assets Papaya Fit/Icons/doctor.png" alt="" class="icono2">
            <div style="padding-top:2rem;">
              <h3 class="titlecards">EMPIEZA TU PLAN</h3>
              <h4 class="textcards">El secreto para alcanzar tu objetivo es simplemente
                empezar.
                Dicen que para alcanzarlo no hay que tener un sueño sino un plan, nosotros te lo damos!</h4>
            </div>
          </div>
          <div class="divcards">
            <img src="/assets/Assets Papaya Fit/resultados/diet - copia.png" alt="" class="icono2">
            <div style="padding-top:2rem;">
              <h3 class="titlecards">COME DIFERENTE</h3>
              <h4 class="textcards">Todo cambio tiene un proceso clave de adaptación. Danos 2
                meses y formemos
                hábitos juntos!. Crea recuerdos con nosotros y compártelos utilizando #papayafit. </h4>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="clearfix">
  <div class="float-left">
    <img src="/assets/Assets Individuales Papaya Fit/iMac 27_.png" alt="" class="img-mac">
  </div>
  <div class="float-right">
    <div class="container-fluid">
      <div class="row">
        <h1><strong>¿Por qué <br></strong></h1>
        <h1 style="color:#f6a60e;"><strong> Papaya Fit</strong></h1>
      </div>
    </div>
    <div>
      <h1><strong>es tu mejor opción?</strong></h1>
    </div><br>
    <div class="text-mac">
      <h4 class="titles-mac"><strong>100% Perzonalizado</strong></h4>
      <h5>Cuidamos que cada menú tenga los requerimientos necesarios para cada persona.</h5>
    </div>
    <div class="text-mac">
      <h4 class="titles-mac"><strong>Nutriólogas Certificadas</strong></h4>
      <h5>Hecho por nutriólogas especializadas en lograr un cambio de impacto.</h5>
    </div>
    <div class="text-mac">
      <h4 class="titles-mac"><strong>Fácil Acceso</strong></h4>
      <h5>En donde estés y desde cualquier dispositivo puedes tener tu plan ideal.</h5>
    </div>
  </div>
</div> 

<div class="container-fluid">
  <div class="row" style="margin-top: 7rem">
    <div class="col-12">
      <div class="row">
        <div class="title-prices">
          <strong style="font-size: 3rem;">Planes a tu </strong>
          <strong style="font-size: 3rem;">medida</strong>
          <!-- <h5 style="color: #FF9D00"> labore et dolore magna aliqua.</h5> -->
          <strong style="padding-top:1rem;">
            <a href="comenzar">
              <p style="color:#FF9D00">Escoge tu plan
                <img style="width: 15px; height: 15px;" src="/assets/Assets Papaya Fit/Vector.png" alt="">
              </p>
            </a>
          </strong>
        </div>
        <!--DIVPRECIOS-->
        <div class="div-prices shadow-prices">
          <div class="head-prices">
            <div style="padding-top:2rem;">
              <strong class="price">Pago Único</strong>
            </div>
          </div>
          <div style="padding:1rem;">
            <strong class="prices">$299</strong>
            <p class="prices-text-one">Plan de alimentación mensual de 1 mes con mas de 15 menús a tu
              disposición</p>
            <p class="prices-text-two">Cancela cuando quieras</p>
          </div>
        </div>
        <div class="div-prices shadow-prices">
          <div class="head-prices">
            <div style="padding-top:2rem;">
              <strong class="price">Suscripción mensual</strong>
            </div>
          </div>
          <div style="padding:1rem;">
            <strong class="prices">$199</strong>
            <p class="prices-text-two">*Cargo mensual recurrente</p>
            <p class="prices-text-one">Plan de alimentación mensual más material adicional</p>
          </div>
        </div>
      </div>
    </div>
    <!--DIVPRECIOS-->
  </div>
</div>


<div class="text-community">
  <h1><strong>Bienvenido a la</strong></h1>
  <h1><strong> comunidad más</strong> <strong style="color:#b2cd45">fit</strong>
  </h1>
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 43rem">
      <div class="container-fluid">
        <div class="row" style="padding-left:60px; padding-top: 1rem;">
          <div class="col-12">
            <div class="row">
              <div class="div-community shadow-community">
                <img class="img-community" src="/assets/Assets Papaya Fit/ixel.jpg" alt="" class="">
                <h3 class="name-community"> <strong>Ixel Avitia</strong> </h3>
                <p class="profession-community">Estilista</p>
                <h4 class="paragraph-community">
                  Hace 3 años comencé con una vida sana, inicie este proceso pesando 89 kilos, más que por estética fue
                  por salud, al caminar no alcanzaba respirar y tenía dolor de cabeza todo el tiempo ya que hace 9 años
                  dar a luz tuve eclampsia, estuve casi al borde la muerte. <br> Actualmente he bajado 17 kg. Tuve a mi
                  segundo bebe con un embarazo muy saludable en el cual solo aumenté 4 kg. Tenía una meta y esa era
                  convertirme en madre por segunda vez y lo mejor es que me quedo un estilo de vida. Invierte en
                  nutrición y ahorrarás en medicinas.
                </h4>
              </div>
              <div class="div-community shadow-community">
                <img class="img-community" src="/assets/Assets Papaya Fit/karina.jpg" alt="" class="">
                <h3 class="name-community"><strong>Karina Infante</strong> </h3>
                <p class="profession-community">Estudiante de gastronomía</p>
                <h4 class="paragraph-community">
                  Una de las experiencias más gratas ha sido formar parte de una vida saludable, y también fue una de
                  las decisiones más difíciles pero sin duda la mejor que he tomado. Comenzó por plan de bajar de peso y
                  ahora es un estilo de vida. <br> Actualmente soy feliz con mi peso. El proceso fue un cambio
                  completamente radical en mi vida. <br> Las dietas son súper variadas ricas y saludables, y recuerda
                  querer es poder y si quieres puedes llegar a ser la mujer u Hombre que siempre deseaste, saludable y
                  más confiado, únete ya a la vida saludable y motívate con tus cambios!
                </h4>
              </div>
              <div class="div-community shadow-community">
                <img class="img-community" src="/assets/Assets Papaya Fit/monica.jpg" alt="" class="">
                <h3 class="name-community"> <strong>Mónica Pérez</strong> </h3>
                <p class="profession-community">Estudiante de preparatoria</p>
                <h4 class="paragraph-community">
                  Para mi ser párate de una vida fit me cambio mucho, adquirí buenos hábitos, estoy mejor conmigo misma,
                  mi estado de salud y psicológicamente. Los planes de alimentación son muy ricos y cero estrictos. <br>
                  Empecé a acostumbrarme a una vida mucho mejor, con más energía, me siento bien, cero cansada, menos
                  estrés, he bajado 15kg. Sin duda invertir en mi nutrición fue una buena decisión! Además de una muy
                  buena atención!

                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide"> -->
    </div>
    <div class="carousel-item" style="height: 43rem">
      <div class="container-fluid">
        <div class="row" style="padding-left:60px; padding-top: 1rem;">
          <div class="col-12">
            <div class="row">
              <div class="div-community shadow-community">
                <img class="img-community" src="/assets/Assets Papaya Fit/testimonio-4.jpg" alt="" class="">
                <h3 class="name-community"> <strong>Guillermo Reyes</strong> </h3>
                <p class="profession-community">Docente</p>
                <h4 class="paragraph-community">
                  En el mes de Julio de 2018 me detectaron más de 400mg/dl de glucosa, pesaba aproximadamente 150 kgs
                  mido 1.84 m, cambie muchos hábitos alimenticios como el tomar refresco, beber cerveza etc. Pero en el
                  mes de Septiembre de ese mismo año tuve un dolor muy intenso que culmino en una operación de vesícula.
                  <br> A partir de Septiembre comencé a tratarme en la parte de Nutrición, hasta la fecha de usar
                  pantalón talla 44 ahora uso talla 36, he bajado casi 40 kilogramos, puedo caminar sin cansarme, cambie
                  mucho así como mi aspecto en general y me siento muy feliz.
                  Trabajo todo el día en la docencia, ahora llevo mi alimentación en mi lonchera y no me malpaso.

                </h4>
              </div>
              <div class="div-community shadow-community">
                <img class="img-community" src="/assets/Assets Papaya Fit/testimonio-5.jpg" alt="" class="">
                <h3 class="name-community"><strong>Isabel Núñez</strong> </h3>
                <p class="profession-community">Asistente</p>
                <h4 class="paragraph-community">
                  Hola, les platico mi experiencia desde que inicié mi plan de alimentación.
                  Me acuerdo que tenía miedo de no poder bajar de peso ya que había intentado muchas cosas y no lo había
                  conseguido pastillas, cremas, batidos entre otras que en el momento si me ayudaban a bajar un poco
                  pero al dejarlo era peor porque venía un rebote, haber estado con asesoría nutricional fue la mejor
                  decisión que pude tomar porque solo así comprendí que nada es milagroso, que solo los hábitos
                  saludables y ejercicio te llevan a la meta. <br> Ya no tengo miedo de ir a comprar ropa porque ahora
                  sí encuentro mi talla, soy más alegre y con ánimo de salir con mi familia a pasear e ir a las
                  albercas. Muchas gracias por este cambio en mi vida.
                </h4>
              </div>
              <div class="div-community shadow-community">
                <img class="img-community" src="/assets/Assets Papaya Fit/monica.jpg" alt="" class="">
                <h3 class="name-community"> <strong>Mónica Infante</strong> </h3>
                <p class="profession-community">Estudiante de preparatoria</p>
                <h4 class="paragraph-community">
                  Para mi ser párate de una vida fit me cambio mucho, adquirí buenos hábitos, estoy mejor conmigo misma,
                  mi estado de salud y psicológicamente. Los planes de alimentación son muy ricos y cero estrictos. <br>
                  Empecé a acostumbrarme a una vida mucho mejor, con más energía, me siento bien, cero cansada, menos
                  estrés, he bajado 15kg. Sin duda invertir en mi nutrición fue una buena decisión! Además de una muy
                  buena atención!

                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide"> -->
    </div>
    <!-- <div class="carousel-item">
                    <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                  </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



@endsection

@section('js')
<script src="/js/home.min.js"></script>
@endsection