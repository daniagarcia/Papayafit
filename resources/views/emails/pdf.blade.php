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
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <link rel="shortcut icon" href="/assets/Assets Papaya Fit/Logo S/papaya.png">
  <link rel="stylesheet" href="/css/dashboard.min.css?{{rand()}}">
  <link rel="stylesheet" href="/css/landingpapaya.min.css">

  <link rel="shortcut icon" href="/assets/Assets Papaya Fit/PapayaLogo.png">
  @yield('css')

  @section('css')
  <link rel="stylesheet" href="/css/home.min.css">
  <link rel="stylesheet" href="/css/landingpapaya.min.css">

  @endsection

  <title>Lista de supermercado</title>
</head>

<nav class="navbar navbar-expand-lg fixed-top nav-background">
  <a style="float: right;" class="navbar-brand" href="/">
    <img src="{{public_path('assets/Assets Papaya Fit/LogoPapayaFitDos.png')}}" alt="Logotipo" style=" width: 100px">
  </a>


</nav>

<body>
  <!-- <header>
            Our Code World
        </header> -->
  <div class="clearfix">
    <div class="float-left" style="width: 22rem;padding-left: 1rem;">
      <strong
        style="font-size: 2rem;color: #696969; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Tu
        lista de supermercado</strong>
    </div>
  </div>
  <div class="">
    <div class="" style="margin-top: 3rem">
      <div class="">
        <div class="">
          <!--DIVPRECIOS-->
          <div style="float:left;width: 20rem !important;border-width: 1px !important;border-radius: 30px !important;
          margin-left: 1rem; -webkit-box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.2);border-radius: .5rem;background: #fff; 
          border-color:rgba(110, 109, 109, 0.829);border-style: solid; border-top-right-radius: 30px;border-top-left-radius: 30px;
          border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">

            <div style="width:20rem !important;height:5rem !important;background-color: #FF9D00;border-top-right-radius: 30px;
            border-top-left-radius: 30px;text-align: center;">

              <div style="padding-top:2rem;">
                <strong style="font-size:20px !important;color:#fff;padding-top:2rem !important;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Frutas y Verduras </strong>
                 <img src="{{public_path('assets/Assets Papaya Fit/manzana1.png')}}" alt="" width="30px;">
               
              </div>
            </div>
            <div style="padding-left: 1rem;padding-top: 0px;padding-bottom: 1rem;">
              <div style="width: 15rem; ">               
                <table class="table">
                  <thead
                    style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#696969;">
                    <tr>
                      <!-- <th scope="col">#</th> -->
                      <th>Producto</th>
                      <!-- <th scope="col">Cantidad</th> -->
                      <!-- <th scope="col">Handle</th> -->
                    </tr>
                  </thead>
                  <tbody
                    style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#696969; font-size: 15px;">
                    <tr>
                      <td>8 manojos de espinaca o 1 bolsa grande de espinacas listas para comer</td>
                    </tr>
                    <tr>
                      <td>Manzana verde</td>
                    </tr>
                    <tr>
                      <td>Piña</td>
                    </tr>
                    <tr>
                      <td>Pepino </td>
                    </tr>
                    <tr>
                      <td>Germinado de lenteja</td>
                    </tr>
                    <tr>
                      <td>Plátano</td>
                    </tr>
                    <tr>
                      <td>Jícama</td>
                    </tr>
                    <tr>
                      <td>Pera</td>
                    </tr>
                    <tr>
                      <td>Papaya</td>
                    </tr>
                    <tr>
                      <td>Ciruela pasa</td>
                    </tr>
                    <tr>
                      <td>Calabacitas</td>
                    </tr>
                    <tr>
                      <td>Ajo</td>
                    </tr>
                    <tr>
                      <td>Zanahoria</td>
                    </tr>         
                  </tbody>
                </table>
              </div>

            </div>
          </div>

          <div style="float:right;width: 20rem !important;border-width: 1px !important;border-radius: 30px !important;
          margin-left: 1rem; -webkit-box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.2);border-radius: .5rem;background: #fff;
          border-color: rgba(110, 109, 109, 0.829);border-style: solid;border-top-right-radius: 30px;border-top-left-radius: 30px;
          border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">

            <div style="width:20rem !important;height:5rem !important;background-color: #FF9D00;border-top-right-radius: 30px;
            border-top-left-radius: 30px;text-align: center;">
              <div style="padding-top:2rem;">
                <strong style="font-size:20px !important;color:#fff;padding-top:2rem !important;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Origen animal</strong>
                <img src="{{public_path('assets/Assets Papaya Fit/canreroja.png')}}" alt="" width="30px;">
              </div>
            </div>

            <div style="padding-left: 1rem;padding-top: 0px;padding-bottom: 1rem;">   
              <div style="width: 15rem;">
                <table class="">
                  <thead
                    style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#696969;">
                    <tr>
                      <!-- <th scope="col">#</th> -->
                      <th>Producto</th>
                      <!-- <th scope="col">Cantidad</th> -->
                      <!-- <th scope="col">Handle</th> -->
                    </tr>
                  </thead>
                  <tbody
                    style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#696969; font-size: 15px;">
                    <tr>
                      <td>Chuleta de cerdo natural</td>
                    </tr>
                    <tr>
                      <td>Pechuga de pollo congelado</td>
                    </tr>
                    <tr>
                      <td>Agujas de res</td>
                    </tr>
                    <tr>
                      <td>Carne molida de res sirlon o pulpa negra</td>
                    </tr>
                    <tr>
                      <td>Jamón de pechuga de pavo</td>
                    </tr>
                    <tr>
                      <td>Plátano</td>
                    </tr>
                    <tr>
                      <td>Jícama</td>
                    </tr>
                    <tr>
                      <td>Pera</td>
                    </tr>
                    <tr>
                      <td>Papaya</td>
                    </tr>
                    <tr>
                      <td>Ciruela pasa</td>
                    </tr>
                    <tr>
                      <td>Calabacitas</td>
                    </tr>
                    <tr>
                      <td>Ajo</td>
                    </tr>
                    <tr>
                      <td>Zanahoria</td>
                    </tr>
                    <tr>
                      <td>Papa</td>
                    </tr>
                   
                  </tbody>
                </table>

              </div>

            </div>
          </div>
        </div>
      </div>
      <!--DIVPRECIOS-->

    </div>

  </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div style="width: 43rem !important;height: 21rem !important;border-width: 1px !important;border-radius: 30px !important;
  margin-left: 1.5rem ;-webkit-box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.2);
   box-shadow: 0 0 0.5rem rgba(0, 0, 0, 0.2);border-radius: .5rem;background: #fff;
   border-color:rgba(110, 109, 109, 0.829);border-style: solid;border-top-right-radius: 30px;border-top-left-radius: 30px;
   border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">

    <div style="width:43rem !important;height:5rem !important;background-color: #FF9D00;border-top-right-radius: 30px;
 border-top-left-radius: 30px;text-align: center;">

      <div style="padding-top:2rem;">
        <strong style="font-size:20px !important;color:#fff;padding-top:2rem !important;
     font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Carbohidratos y Extras </strong>
     <img src="{{public_path('assets/Assets Papaya Fit/pan.png')}}" alt="" width="30px;">
      </div>
    </div>
    <div style="padding-left: 1rem;;padding-top: 0px;padding-bottom: 1rem;">
      <div style="width: 15rem;">
        <table class="table">
          <thead style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#696969;">
            <tr>
              <!-- <th scope="col">#</th> -->
              <th>Producto</th>
              <!-- <th scope="col">Cantidad</th> -->
              <!-- <th scope="col">Handle</th> -->
            </tr>
          </thead>
          <tbody
            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;color:#696969; font-size: 15px;">
            <tr style="border: #696969;">
              <td>8 manojos de espinaca o 1 bolsa grande de espinacas listas para comer</td>
            </tr>
            <tr>
              <td>Manzana verde</td>
            </tr>
            <tr>
              <td>Piña</td>
            </tr>
            <tr>
              <td>Pepino </td>
            </tr>
            <tr>
              <td>Germinado de lenteja</td>
            </tr>
            <tr>
              <td>Plátano</td>
            </tr>
            <tr>
              <td>Jícama</td>
            </tr>
            <tr>
              <td>Pera</td>
            </tr>            
          </tbody>
        </table>
      </div>    

    </div>
  </div>

  <div style="page-break-after:always; line-height: 25px;">   
    <div style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
    <img src="{{public_path('assets/Assets Papaya Fit/LogoPapayaFitDos.png')}}" alt="" width="100px;float:right;"> 
      <strong style="font-size: 2rem;color: #696969; ">Papaya Tips </strong>
      <h2>¿Son tus primeros pasos en la cocina?  <img src="{{public_path('assets/Assets Papaya Fit/foco.jpg')}}" alt="" width="35px;"></h2>
      <h3>Te daremos unos tips…</h3>
    </div>

    <ol style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
      <li>Organización:</li>
      <dd>Genera logística en tu cocina y ganaras tiempo. <br> Tomate 25 minutos de tu tiempo una vez después de hacer el súper
        para lavar, desinfectar y picar los alimentos que sepas que necesitaran pasar por este proceso. <br>
        <img src="{{public_path('assets/Assets Papaya Fit/lavar.jpg')}}" alt="" width="250px;">
        
        
      </dd>
      <li>Congelación:</li>
      <dd>Quizás coser leguminosas no sea lo tuyo, para ello te recomendamos cocer 1 kilo en una olla de lento
        cocimiento durante la noche y así por la mañana tendrás 1 kilo de ricas leguminosas cosidas. <br> Lo que no vayas a
        utilizar durante la semana lo puedes congelar para la siguiente.
        <br> Nota: Recuerda que son ricas en aminoácidos, fibra, minerales y carbohidratos complejos que te ayudaran a
        lograr tu objetivo de manera saludable.
        <br> Quizás otro tip que te pueda ayudar sea reservar el caldo de pollo hervido y congelar para utilizar después para
        coser arroz y lograr una sazón de abuelita.
      </dd>
      <li>Almacenamiento:</li>
      <dd>No en vano las mamás adoran los tuppers, estos te harán la vida más práctica y sencilla de lo que te imaginas!
        Invertir en unos cuantos no está nada mal. <br> <br>
        <br><img src="{{public_path('assets/Assets Papaya Fit/tuppers.jpg')}}" alt="" width="250px;">
        <br> Nota: Al guardar los alimentos en el refrigerador es mejor colocar los productos crudos en la parte
        inferior, y evitar así que puedan gotear y contaminar a los ya preparados. Recuerda que es necesario utilizar
        recipientes herméticos para conservar los alimentos.
      </dd>
      <li>Sazón:</li>
      <dd>El secreto de cocina de las abuelitas está en la sazón. Anímate a utilizar especias en tus platillos como:
        Hojas de laurel, Hiervas finas, hojas de olor, sal de ajo, ajo en polvo, pimienta, orégano, comino, sal de mar,
        pimienta cayena, canela y chiles.
      </dd>
      <li>Salsa de Tomate:</li>
      <dd>
        • Coloca los tomates, la cebolla y los dientes de ajo en una olla grande o cacerola. Cúbrelos con agua, coloca
        la tapa de la cacerola y cocina a fuego alto hasta que comience a hervir; Una vez que el agua comienza a
        realizar el proceso de ebullición IMPORTANTE reducir el fuego a fuego lento o el agua hirviendo podría saltarte
        al destaparlo. Cocina hasta que los tomates estén suaves y las pieles se estén pelando. Retira la piel de los
        tomates. <br>
        <br> • Con cuidado, coloca sólo los tomates, la cebolla y el ajo en una licuadora y licúa hasta que tenga una
        salsa muy suave. (Agrega unas cuantas cucharadas de agua a la licuadora, sólo si su licuadora está teniendo
        dificultades para procesar la salsa) <br>
        <br> • Utilizando un colador, verter la salsa en un frasco de vidrio y una vez que estén completamente frescos,
        guárdalos en el refrigerador.  <br>
        <br> Nota: La salsa durará aproximadamente 4 días. Úsala según sea necesario para sus sopas u otras recetas.
      </dd>
      <!-- <br> -->
      <li>Toma medidas de higiene:</li> <br>
      <dd>
        • Lavarse las manos. <br>
        • No fumar en la cocina.<br>
        • No toser ni estornudar sobre los alimentos.<br>
        • Cubrir adecuadamente las heridas.<br> <br>

        Evita la contaminación cruzada! <br>
        La contaminación cruzada es la producida al manipular los alimentos durante su preparación, debido a que los
        microorganismos se transfieren a través de las manos, los equipos de cocina, los utensilios y las tablas para
        cortar. <br>

        Para evitarla, es fundamental que separes siempre los alimentos cocidos y listos para consumir de los crudos. <br>

        Lavar la tabla y cuchillo antes de cortar vegetales, sobre todo tras haber cortado carne con estos utensilios o
        bien utilizar una tabla para vegetales y otra para carne, así como cuchillos distintos. <br>
        Y lo más importante: no olvides lavarte muy bien las manos antes de cocinar, cocinar con el cabello recogido,
        evitar tener contacto con la cara y cabello durante la cocina y lavarte las manos después de haber manipulado
        alimentos crudos o si has estado tocándote la cara o el cabello.

      </dd>

      <li>Checar la fecha de caducidad </li>
      <dd>
        Asegúrate de revisar la fecha de caducidad de todos los alimentos que hayas comprado en el súper! Así evitaras
        una intoxicación alimentaria.
      </dd>

    </ol>
  </div>
</body>
</html>