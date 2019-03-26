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
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->


        @yield('meta')
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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






<form id="regForm" action="/action_page.php">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Name:
    <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab">Contact Info:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>


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