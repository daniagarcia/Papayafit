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
              <a href="" style="margin-left:3rem;"> <p>#PapayaFit</p></a>
              <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
            </div>
      <div style="padding-left:15rem;padding-top: 13rem">
        <strong style="color:#fff; font-size: 20px;">ANTES DE COMENZAR</strong><br>
        <strong class="" style="font-size: 6rem; color: #fff; padding-bottom: 2rem;">¿Que te gustaría lograr?</strong>
      </div>
      <div class="clearfix"
        style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-left: 32rem; padding-top: 5rem;">
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz"><strong class="textoquiz"
            style="color:ed8410; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size: 20px; color:#FF9D00;">Bajar de peso disminuyendo % de grasa</p>
          </strong>
        </div><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:ed8410; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size: 20px; color:#FF9D00;">Solo adquirir buenos hábitos alimenticios</p>
          </strong>
        </div><br>
        <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
          <strong style="color:ed8410; font-size: 1rem;  margin-top: 5rem;">
            <p style="margin-top: 2rem; font-size:  20px; color:#FF9D00;">Aumentar mi peso de manera saludable</p>
          </strong>
        </div>
      </div>
    </div>

    <div class="tab headerquiz2 " style="height: 30rem; padding-top: 2rem;">
        <div class="row">
            <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
              <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
              <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
              <a href="" style="margin-left:3rem;"> <p>#PapayaFit</p></a>
              <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
            </div>
      <div style="padding-left:20rem;padding-top: 13rem">
        <strong class="" style="font-size: 6rem; color: #fff; padding-bottom: 2rem;">Selecciona tu género</strong>
      </div>
      <div class="clearfix"
        style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-left: 25rem; padding-top: 7rem;">

        <div class="float-left">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divsexo ">
            <img style="width: 62px; padding-top: 2rem;" src="/assets/Assets Papaya Fit/Group (1).png" alt="">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size: 20px;">Femenino</p>
            </strong>

          </div><br>

        </div>


        <div class="float-right" style="padding-right: 25rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divsexo ">
            <img style="width: 70px; padding-top: 2.5rem;height: 8rem" src="/assets/Assets Papaya Fit/Vector (1).png"
              alt="">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size: 20px;">Masculino</p>
            </strong>
          </div><br>
           </div>
      </div>
    <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png" alt="" style="width: 30px; height: 30px;"></button>

    </div>
    <div class="tab headerquiz3" style="height: 30rem; padding-top: 2rem;">
        <div class="row">
            <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
              <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
              <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
              <a href="" style="margin-left:3rem;"> <p>#PapayaFit</p></a>
              <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
            </div>
      <div style="padding-left:20rem;padding-top: 8rem;">
        <!-- <h3 style="color:#fff;">ANTES DE COMENZAR</h3> -->
        <strong class="" style="font-size: 6rem; color: #fff;">¿Cual es tu nivel de actividad física?</strong>
      </div>
      <div class="clearfix" style="margin-left: 15rem; line-height: 1rem; text-align: center;padding-top: 5rem;">
        <div class="float-left" style="">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Casi Nunca</p>
            </strong>
          </div><br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Menos de 3 veces por semana</p>
            </strong>
          </div> <br><br>

        </div>
        <div class="float-right" style="padding-right:15rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Hago ejercicio 3 veces por semana</p>
            </strong>
          </div> <br><br>
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
            <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
              <p style="margin-top: 2rem; font-size:  20px;">Hago ejercicio más de 3 veces por semana</p>
            </strong>
          </div><br><br>

        </div>
      </div>
    <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png" alt="" style="width: 30px; height: 30px;"></button>
    </div>
    <div class="tab headerquiz4" style="height: 30rem; padding-top: 2rem;">
        <div class="row">
            <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
              <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
              <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
              <a href="" style="margin-left:3rem;"> <p>#PapayaFit</p></a>
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
    <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png" alt="" style="width: 30px; height: 30px;"></button>
      
    </div>
    <div class="tab headerquiz5" style="height: 30rem; padding-top: 2rem;">
    <div class="row">
            <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
              <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
              <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
              <a href="" style="margin-left:3rem;"> <p>#PapayaFit</p></a>
              <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
            </div>
      <div style="padding-left:18rem;padding-top: 11rem">
        <!-- <h3 style="color:#fff;">ANTES DE COMENZAR</h3> -->
        <strong class="" style="font-size: 5rem; color: #fff;">¿Con que opción te identificas más?</strong>
      </div>

      <div class="clearfix" style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-top: 2rem; ">
         
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
    <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png" alt="" style="width: 30px; height: 30px;"></button>

    </div>
    
    <div class="tab headerquiz6" style="height: 30rem; padding-top: 2rem;">

      <div class="row">
        <!-- <img class="" src="/assets/Assets Papaya Fit/facebook.png" alt=""> -->
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/facebook.png" alt="">
          <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
          <a href="" style="margin-left:3rem;"> <p>#PapayaFit</p></a>
          <!-- <img class="sizeIcons" src="/assets/Assets Papaya Fit/twitter-logo-silhouette.png" alt=""> -->
        </div>
        <div style="padding-left:20rem;padding-top: 13rem;">
          <strong class="" style="font-size: 6rem; color: #fff; padding-bottom: 2rem;">¡Ya casi terminamos!</strong> <br>
          <strong style="color:#fff; font-size: 20px;">SÓLO NECSITAMOS UNOS ÚLTIMOS DATOS</strong><br>
        </div>
        <div class="clearfix" style="margin-left: 2rem; line-height: 2rem; text-align: center;  padding-top: 5rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="">
            <div class="form-group">
                <strong style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 25rem">Estatura(metros)</strong><br>            
                <input  class="txtinput" type="text" placeholder=""><br>
                <strong style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 32rem">Edad</strong><br>
                <input class="txtinput" type="text" placeholder=""><br>
                <strong style="color:#696969; font-size: 15px;  margin-top: 5rem;margin-right: 30rem">Peso(kg)</strong><br>
                <input class="txtinput" type="text" placeholder=""><br><br>
                <a href="/resultados">
                    <strong style="color:#FF9D00; font-size: 20px;padding-left: 25rem;">Resultados<img style="width: 20px; height: 20px;"
                        src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
                  </a>
            </div>
         
          </div><br>        
        </div>
    <button type="button" id="prevBtn" onclick="nextPrev(-1)"><img src="/assets/Assets Papaya Fit/Flecha - copia.png" alt="" style="width: 30px; height: 30px;"></button>

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

  <!-- <form id="" action="/action_page.php"> -->


  <!-- 
    <div class="tab clearfix" style="margin-left: 15rem; line-height: 1rem; text-align: center;padding-top: 5rem;">
      <div class="float-left"  style="">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz"> 
              <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                <p style="margin-top: 2rem; font-size:  20px;">Casi Nunca</p>
              </strong>
               </div><br><br>
               <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz"> 
                <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                  <p style="margin-top: 2rem; font-size:  20px;">Menos de 3 veces por semana</p>
                </strong>
             </div> <br><br>

      </div>
      <div class="float-right"  style="padding-right:15rem;">
          <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz"> 
              <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                <p style="margin-top: 2rem; font-size:  20px;">Hago ejercicio 3 veces por semana</p>
              </strong>
           </div> <br><br>
                    <div onclick="nextPrev(1)" oninput="this.className = ''" class="divquiz">
                      <strong style="color:#FF9D00; font-size: 1rem;  margin-top: 5rem;">
                        <p style="margin-top: 2rem; font-size:  20px;">Hago ejercicio más de 3 veces por semana</p>
                      </strong>
                    </div><br><br>

      </div>
  
 

      </div> -->

  <!-- <div class="tab clearfix" style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-left: 32rem; padding-top: 5rem;">
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

      </div> -->

  <!-- <div class="tab clearfix" style="margin-left: 2rem; line-height: 1rem; text-align: center; padding-top: 5rem; ">
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

      <div style="overflow:auto;">
        <div style="float:right;">
         <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
       
        </div>
      </div>
     
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
  </form> -->


  <!--....................................................................................-->



  <!-- <footer style="background-color:#fff;" class="imagenfooter clearfix">

    <div class="float-left">
      <img src="/assets/Assets Papaya Fit/Logo con Slogan y Papaya.png" alt="" class="papayalogofooter">
    </div><br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
    <div class="row" style="margin-left: 26rem; align-self: center; margin-top: 2    0rem;">


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


  </footer> -->

  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
  </script>
</body>

</html>