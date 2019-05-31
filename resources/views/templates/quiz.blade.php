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
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="shortcut icon" href="/assets/Assets Papaya Fit/PapayaLogo.png">
  <link rel="stylesheet" href="/css/dashboard.min.css?{{rand()}}">
  <link rel="stylesheet" href="/css/landingpapaya.min.css">

  @yield('css')

  @section('css')
  <link rel="stylesheet" href="/css/home.min.css">
  <link rel="stylesheet" href="/css/access.min.css?{{rand()}}">
  <link rel="stylesheet" href="/css/landingpapaya.min.css">

  @endsection

  <title>Quiz</title>

</head>

<body>
  <form action="/action_page.php">
    <div class="tab headerquiz1">
      <div class="container-fluid">
        <div class="row">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png"  alt="">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
          <a href="" style="margin-left:3rem;">
            <p class="hashtag-papaya">#papayafit</p>
          </a>
        </div>
      </div>
      <div class="div-question">
        <strong class="before-start">ANTES DE COMENZAR</strong><br>
        <strong class="text-question-one">¿Que te gustaría lograr?</strong>
      </div>
      <div class="clearfix div-answers">
        <div onclick="nextPrev(1)" oninput="this.className = ''" id="res1" class="divquiz">
          <div onClick="objetivo()" class="divquiz2 objetivo"  data-objetivo="100">
            <strong > <p class="textoquiz"> Bajar de peso disminuyendo % de grasa</p></strong>
          </div>
        </div><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''" id="res2" class="divquiz">
          <div onClick="objetivo()" class="divquiz2 objetivo"  data-objetivo="0">
            <strong > <p class="textoquiz">  Solo adquirir buenos hábitos alimenticios</p> </strong>
          </div>
        </div><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''" id="res3" class="divquiz">
          <strong style="color:ed8410; font-size: 1rem;  margin-top: 5rem;">
            <div onClick="objetivo()" class="divquiz2 objetivo"  data-objetivo="-100">
              <strong> <p class="textoquiz">Aumentar mi peso de manera saludable</p> </strong>
            </div>
          </strong>
        </div>
      </div>
    </div>
<!--______________________________________________________________________________________________________________-->
    <div class="tab headerquiz2 " style="height: 30rem; padding-top: 2rem;">
      <div class="container-fluid">
        <div class="row">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
          <a href="" style="margin-left:3rem;">
            <p class="hashtag-papaya">#papayafit</p>
          </a>
        </div>
      </div>
      <div class="div-question-two">
        <strong class="text-question-two">Selecciona tu género</strong>
      </div>
      <div class="clearfix div-answers-sex">

        <div class="float-left">
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="fem" class="divsexo" >
              <div class="divsexo2" onclick="obtenerDatos()" data-genero="f">
            <img style="width: 62px; padding-top: 2rem;" src="/assets/Assets Papaya Fit/Group (1).png" alt="">
          
              <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                <p style="margin-top: 2rem; font-size: 20px;">Femenino</p>
              </strong>
            </div>
          </div><br>
        </div>
        <div class="float-right" style="padding-right: 25rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="masc" class="divsexo">
              <div class="divsexo2" onclick="obtenerDatos()" data-genero="m">
            <img style="width: 70px; padding-top: 2.5rem;height: 8rem" src="/assets/Assets Papaya Fit/Vector (1).png" alt="">           
              <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                <p style="margin-top: 2rem; font-size: 20px;">Masculino</p>
              </strong>
            </div>
          </div><br>
        </div>
      </div>
      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png"
          alt="" style="width: 30px; height: 30px;"></button>

    </div>
<!--______________________________________________________________________________________________________________-->
    <div class="tab headerquiz3" style="height: 30rem; padding-top: 2rem;">
      <div class="container-fluid">
        <div class="row">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
          <a href="" style="margin-left:3rem;">
            <p class="hashtag-papaya">#papayafit</p>
          </a>
        </div>
      </div>

      <div class="div-question-three">
        <strong class="text-question-three">¿Cual es tu nivel de actividad física?</strong>
      </div>
      <div class="clearfix div-answers-three">
        <div class="">
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="casinunca" class="divquiz" >
            <div class="divquiz2 actividad" onclick="actividadFisica()" data-actividad-m="1.3" data-actividad-f="1.2">
              <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                <p style="margin-top: 2rem; font-size:  20px;">Casi Nunca</p>
              </strong>
            </div>

          </div><br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="tresveces" class="divquiz">
            <div class="divquiz2 actividad" onclick="actividadFisica()" data-actividad-m="1.5" data-actividad-f="1.4">
              <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                <p style="margin-top: 2rem; font-size:  20px;">Hago ejercicio 3 veces por semana</p>
              </strong>

            </div>

          </div> <br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="cincoveces"  class="divquiz">
            <div class="divquiz2 actividad" onclick="actividadFisica()" data-actividad-m="1.7" data-actividad-f="1.6">
              <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                <p style="margin-top: 2rem; font-size:  20px;">Hago ejercicio más de 5 veces por semana</p>
              </strong>
            </div>
          </div>
        </div>
      </div>
      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png"
          alt="" style="width: 30px; height: 30px;"></button>
    </div>

<!--______________________________________________________________________________________________________________-->
    <div class="tab headerquiz4" style="height: 30rem; padding-top: 2rem;">
      <div class="container-fluid">
        <div class="row">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
          <a href="" style="margin-left:3rem;">
            <p  class="hashtag-papaya">#papayafit</p>
          </a>
        </div>
      </div>

      <div class="div-question-four">
        <strong class="text-question-four">Describe un día normal</strong>
      </div>
      <div class="clearfix div-answers-four">
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">Paso la mayor parte del día fuera de casa</p>
          </strong>
        </div><br><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">Me muevo fuera de casa pero como en casa</p>
          </strong>
        </div><br><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">Paso la mayor parte del tiempo en casa</p>
          </strong>
        </div><br><br>

      </div>
      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png"
          alt="" style="width: 30px; height: 30px;"></button>

    </div>
<!--______________________________________________________________________________________________________________-->
    <div class="tab headerquiz5" style="height: 30rem; padding-top: 2rem;">
      <div class="container-fluid">
        <div class="row">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
          <a href="" style="margin-left:3rem;">
            <p class="hashtag-papaya">#papayafit</p>
          </a>
        </div>
      </div>

      <div class="div-question-five">
        <strong class="text-question-five">¿Con que opción te identificas más?</strong>
      </div>

      <div class="clearfix div-answers-five">

        <div class="float-left" style="padding-left: 13rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Mi debilidad es lo dulce</p>
            </strong>
          </div><br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Me gusta mucho la comida frita y grasosa</p>
            </strong>
          </div><br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Bebo refresco</p>
            </strong>
          </div><br><br>
        </div>
        <div class="float-right" style="padding-right: 13rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Consumo alcohol los fines de semana</p>
            </strong>
          </div><br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Normalmente añado sal a los alimentos</p>
            </strong>
          </div><br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Ninguna de las anteriores</p>
            </strong>
          </div><br><br>
        </div>


      </div>
      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png"
          alt="" style="width: 30px; height: 30px;"></button>

    </div>
  <!--______________________________________________________________________________________________________________-->
  <div class="tab headerquiz7" style="height: 30rem; padding-top: 2rem;">
    <div class="container-fluid">
      <div class="row">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <a href="" style="margin-left:3rem;">
          <p class="hashtag-papaya">#papayafit</p>
        </a>
      </div>
    </div>

    <div class="div-question-five" style="padding-top: 18rem !important;"">
      <strong class="text-question-five">¿Cuanta agua bebes al día?</strong>
    </div>

    <div class="clearfix div-answers-five">

      <div class="float-left" style="padding-left: 13rem;">
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">250 ml</p>
          </strong>
        </div><br><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">500 ml</p>
          </strong>
        </div><br><br>
     
      </div>
      <div class="float-right" style="padding-right: 13rem;">
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">1 litro</p>
          </strong>
        </div><br><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">2 o mas litros</p>
          </strong>
        </div><br><br>
        <!-- <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">Normalmente añado sal a los alimentos</p>
          </strong>
        </div><br><br> -->
        <!-- <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px;">Ninguna de las anteriores</p>
          </strong>
        </div><br><br> -->
      </div>


    </div>
    <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png"
        alt="" style="width: 30px; height: 30px;"></button>

  </div>


 <!--______________________________________________________________________________________________________________-->

    <div class="tab headerquiz6" style="height: 30rem; padding-top: 2rem;">
      <div class="container-fluid">
        <div class="row">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
          <a href="" style="margin-left:3rem;">
            <p class="hashtag-papaya">#papayafit</p>
          </a>
        </div>
      </div>


      <div class="div-question-six">
        <strong class="text-question-six">¡Ya casi terminamos!</strong> <br>
        <strong class="text2-question-six">SÓLO NECSITAMOS UNOS ÚLTIMOS DATOS</strong><br>
      </div>
      <div class="clearfix div-answers-six">
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="">
          <div class="form-group">
            <strong
              style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 29rem">Altura(cm)</strong><br>
            <input class="txtinput" type="number" placeholder="" id="mts"><br>
            <strong style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 32rem">Edad</strong><br>
            <input class="txtinput" type="number" placeholder="" id="edad"><br>
            <strong style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 30rem">Peso(kg)</strong><br>
            <input class="txtinput" type="number" placeholder="" id="peso"><br><br>
            <a href="resultados" onclick="obtenerDatos()" class="resultados">
              <strong class="res-quiz">Resultados<img
                  class="res-flecha" src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
            </a>
          </div>

        </div><br>
      </div>
      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png"
          alt="" style="width: 30px; height: 30px;"></button>

    </div>
    <!--______________________________________________________________________________________________________________-->
   <div style="text-align:center;margin-top:15rem; padding-top: 12rem;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>

    </div>
  </form>

  <script src="./libs/jquery/jquery.min.js"></script>
  <script src="./js/quiz.min.js"></script>
  <script src="./js/question.min.js"></script>
</body>


</html>
<!-- @section('js') -->
<!-- <script src="./js/quiz.min.js"></script> -->
<!-- @stop -->