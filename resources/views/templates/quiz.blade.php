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
  <link rel="shortcut icon" href="/assets/Assets Papaya Fit/Logo S/papaya.png">
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
    <div class="tab headerquiz1" style="height: 30rem; padding-top: 2rem;">

      <div class="row">
        <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <a href="" style="margin-left:3rem;">
          <p style=" font-size: 15px; color: blue">#papayafit</p>
        </a>
        <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
      </div>
      <div style="padding-left:15rem;padding-top: 13rem">
        <strong style="color:#fff; font-size: 20px;">ANTES DE COMENZAR</strong><br>
        <strong class="" style="font-size: 6rem; color: #fff; padding-bottom: 2rem;">¿Que te gustaría lograr?</strong>
      </div>
      <div class="clearfix"
        style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-left: 32rem; padding-top: 5rem;">
        <div onclick="nextPrev(1)"  oninput="this.className = ''" id="res1" class="divquiz" data-bajarpeso="100" >
          <div  onClick="objetivo()" class="divquiz2">
              <strong class="textoquiz" style="color:ed8410; font-size: 1rem;  margin-top: 5rem;">
                  <p style="margin-top: 2rem; font-size: 20px; color:#FF9D00;">Bajar de peso disminuyendo % de grasa</p>
                </strong>
          </div>
        
        </div><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''"  id="res2"class="divquiz" data-habitos="0">
            <div  onClick="objetivo()" class="divquiz2">
          <strong style="color:ed8410; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size: 20px; color:#FF9D00;">Solo adquirir buenos hábitos alimenticios</p>
          </strong>
          </div>
        </div><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''"   id="res3" class="divquiz" data-aumentar="-100">
          <strong style="color:ed8410; font-size: 1rem;  margin-top: 5rem;">
              <div  onClick="objetivo()" class="divquiz2">
            <p style="margin-top: 2rem; font-size:  20px; color:#FF9D00;">Aumentar mi peso de manera saludable</p>
              </div>
          </strong>
        </div>
      </div>
    </div>

    <div class="tab headerquiz2 " style="height: 30rem; padding-top: 2rem;">
      <div class="row">
        <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <a href="" style="margin-left:3rem;">
          <p style=" font-size: 15px; color: blue">#papayafit</p>
        </a>
        <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
      </div>
      <div style="padding-left:20rem;padding-top: 13rem">
        <strong class="" style="font-size: 6rem; color: #fff; padding-bottom: 2rem;">Selecciona tu género</strong>
      </div>
      <div class="clearfix"
        style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-left: 25rem; padding-top: 7rem;">

        <div class="float-left">
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="fem" class="divsexo" data-femenino="f">
            <img style="width: 62px; padding-top: 2rem;" src="/assets/Assets Papaya Fit/Group (1).png" alt="">
            <div class="divsexo2"  onclick="obtenerDatos()">
                <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                    <p style="margin-top: 2rem; font-size: 20px;">Femenino</p>
                  </strong>
            </div> 
          </div><br>
        </div>
        <div class="float-right" style="padding-right: 25rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''"  id="masc" class="divsexo" data-masculino="m">
            <img style="width: 70px; padding-top: 2.5rem;height: 8rem" src="/assets/Assets Papaya Fit/Vector (1).png"
              alt="">
              <div class="divsexo2"  onclick="obtenerDatos()">
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
    <div class="tab headerquiz3" style="height: 30rem; padding-top: 2rem;">
      <div class="row">
        <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <a href="" style="margin-left:3rem;">
          <p>#papayafit</p>
        </a>
        <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
      </div>
      <div style="padding-left:20rem;padding-top: 8rem;">
        <!-- <h3 style="color:#fff;">ANTES DE COMENZAR</h3> -->
        <strong class="" style="font-size: 6rem; color: #fff;">¿Cual es tu nivel de actividad física?</strong>
      </div>
      <div class="clearfix" style="margin-left: 15rem; line-height: 1rem; text-align: center;padding-top: 5rem;">
        <div class="float-left" style="">
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="casinunca" class="divquiz" data-nuncam="1.3" data-nuncaf=1.2>
            <div class="divquiz2" onclick="actividadFisica()">
                <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                    <p style="margin-top: 2rem; font-size:  20px;">Casi Nunca</p>
                  </strong>
            </div>
            
          </div><br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="tresveces" class="divquiz" data-tresvecesm="1.3" data-tresvecesf=1.2>
            <div class="divquiz2" onclick="actividadFisica()">
                <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                    <p style="margin-top: 2rem; font-size:  20px;">Hago ejercicio 3 veces por semana</p>
                  </strong>

            </div>
           
          </div> <br><br>

        </div>
        <div class="float-right" style="padding-right:15rem;">
         
          <div onclick="nextPrev(1)" oninput="this.className = ''" id="cincoveces" class="divquiz" data-cincovecesm="1.5" data-data-cincovecesf=1.6>
            <div class="divquiz2" onclick="actividadFisica()">
                <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                    <p style="margin-top: 2rem; font-size:  20px;">Hago ejercicio más de 5 veces por semana</p>
                  </strong>

            </div>
            
          </div><br><br>

        </div>
      </div>
      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png"
          alt="" style="width: 30px; height: 30px;"></button>
    </div>
    <div class="tab headerquiz4" style="height: 30rem; padding-top: 2rem;">
      <div class="row">
        <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <a href="" style="margin-left:3rem;">
          <p style=" font-size: 15px; color: blue">#papayafit</p>
        </a>
        <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
      </div>
      <div style="padding-left:15rem;padding-top: 18rem;">
        <!-- <h3 style="color:#fff;">ANTES DE COMENZAR</h3> -->
        <strong class="" style="font-size: 6rem; color: #fff;">Describe un día normal</strong>
      </div>
      <div class="clearfix"
        style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-left: 32rem; padding-top: 2rem;">
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
    <div class="tab headerquiz5" style="height: 30rem; padding-top: 2rem;">
      <div class="row">
        <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <a href="" style="margin-left:3rem;">
          <p style=" font-size: 15px; color: blue">#papayafit</p>
        </a>
        <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
      </div>
      <div style="padding-left:18rem;padding-top: 11rem">
        <!-- <h3 style="color:#fff;">ANTES DE COMENZAR</h3> -->
        <strong class="" style="font-size: 5rem; color: #fff;">¿Con que opción te identificas más?</strong>
      </div>

      <div class="clearfix" style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-top: 2rem; ">

        <div class="float-left" style="padding-left: 13rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz" >
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

    <div class="tab headerquiz6" style="height: 30rem; padding-top: 2rem;">

      <div class="row">
        <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
        <a href="" style="margin-left:3rem;">
          <p style=" font-size: 15px; color: blue">#papayafit</p>
        </a>
        <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
      </div>
      <div style="padding-left:20rem;padding-top: 13rem;">
        <strong class="" style="font-size: 6rem; color: #fff; padding-bottom: 2rem;">¡Ya casi terminamos!</strong> <br>
        <strong style="color:#fff; font-size: 20px;">SÓLO NECSITAMOS UNOS ÚLTIMOS DATOS</strong><br>
      </div>
      <div class="clearfix" style="margin-left: 2rem; line-height: 2rem; text-align: center;  padding-top: 5rem;">
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="">
          <div class="form-group">
            <strong
              style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 25rem">Estatura(metros)</strong><br>
            <input class="txtinput" type="number" placeholder="" id="mts" ><br>
            <strong style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 32rem">Edad</strong><br>
            <input class="txtinput" type="number" placeholder="" id="edad"><br>
            <strong style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 30rem">Peso(kg)</strong><br>
            <input class="txtinput" type="number" placeholder="" id="peso"><br><br>
            <a href="" onclick="obtenerDatos()">
              <strong style="color:#FF9D00; font-size: 20px;padding-left: 25rem;">Resultados<img
                  style="width: 20px; height: 20px;" src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
            </a>
          </div>

        </div><br>
      </div>
      <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png"
          alt="" style="width: 30px; height: 30px;"></button>

    </div>
    <!-- <br><br><br><br> <br><br><br><br> -->
    <!-- <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png" alt="" style="width: 30px; height: 30px;"></button> -->
    <div style="text-align:center;margin-top:15rem; padding-top: 12rem;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>

    </div>
  </form>


  <script src="./js/quiz.min.js"></script>
  <script src="./js/resultados.min.js"></script>
</body>

</html>
<!-- @section('js') -->
<!-- <script src="./js/quiz.min.js"></script> -->
<!-- @stop -->