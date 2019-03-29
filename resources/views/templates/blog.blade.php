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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

          <a href="/">
            <img src="/assets/Assets Papaya Fit/Logo Sin Papaya con Slogan rec.png" alt="Logotipo"
              style="width:500px ; padding-right:10rem;margin-left: 20rem;">

          </a>

      </ul>

      <form class="form-inline my-2 my-lg-0">

        <!-- <h5 class="my-2 my-sm-0 texto p-2"> <strong>Iniciar Sesión</strong> </h5> -->
        <button style="background-color:#9FC40A ;" class="btn btn-succsess my-2 my-sm-0 textobtn"
          type="submit"><strong>Comienza</strong></button>
      </form>
    </div>
  </nav>
  <br><br><br><br> <br><br><br><br>

  <div class="blog" style="height: 35rem;"><br><br><br><br><br><br>
    <div style="padding-left:9rem;">
      <strong style="font-size: 4rem; color: #fff;">Noticia Destacada</strong><br>
      <strong style="font-size: 4rem;color: #fff;">en el blog</strong>
    </div>
    <div style="text-align: justify;padding-left:9rem; width: 50rem; ">
      <p style="font-size: 20px; color:#fff;">
        lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna
        aliqua.
      </p>
      <div class="row" style="padding-left:1rem;">
        <a href="">
          <h2 style="color:#fff;">Leer artículo <img class="felcha" src="/assets/Assets Papaya Fit/Flecha.png" alt="">
          </h2>
        </a>

      </div>
    </div>

  </div>
  <div style="margin-left: 6rem; padding-top: 5rem;" class="clearfix">
    <ul class="row float-left">
      <!-- <li class=""> -->
      <a class="" href="#"><br></a>
      <!-- </li> -->
      <!-- <li class=""> -->
      <a class="" href="nosotros"><strong style="font-size: 20px; color:#FF9D00">Categoría <br></strong></a>
      <!-- </li> -->
      <!-- <li class=""> -->
      <a class="" href="#" style=" font-size: 20px; color:#FF9D00">|<br></a>
      <!-- </li> -->
      <!-- <li class=""> -->
      <a class="" href="#"><strong style=" font-size: 20px; color:#FF9D00">Categoría <br></strong></a>
      <!-- </li> -->
      <!-- <li class=""> -->
      <a class="" href="#" style=" font-size: 20px; color:#FF9D00">| <br></a>
      <!-- </li> -->
      <a class="" href="#"><strong style=" font-size: 20px; color:#FF9D00">Categoría <br></strong></a>
    </ul>
    <div class="float-right"
      style="border-width:1px;border-radius:30px; border-color: #FF9D00; border-block-end-color: #FF9D00;border-style: solid; width: 500px; height: 40px;">
      <!-- <input type="text" style="width: 400px; height: 30px;"> -->
    </div>
  </div>


  <div class="clearfix" style="margin-left: 8rem; margin-right: 5rem;">
    <h1>Lorem ipsum</h1>
    <div class="float-left">
      <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="categoria">
      <div style="width: 40rem;">
        <strong style="color: #FF9D00; font-size: 15px;">Post blog</strong>
        <p style="color:#696969"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
          sapiente libero debitis
          iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
          laborum.</p>
      </div>
    </div>
    <div class="float-right" style="text-align: justify;">
      <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="categoria">
      <div style="width: 40rem;">
        <strong style="color: #FF9D00; font-size: 15px;">Post blog</strong>
        <p style="color:#696969"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
          sapiente libero debitis
          iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
          laborum.</p>
      </div><br> <br>
      <div style="margin-left: 30rem;">
        <a href="">
          <strong style="color:#FF9D00; font-size: 15px;">Leer todos <img style="width: 20px; height: 20px;"
              src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
        </a>
      </div>

    </div>


  </div>
  <div class="clearfix" style="margin-left: 8rem; margin-right: 5rem;">
    <h1>Lorem ipsum</h1>
    <div class="float-left">
      <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="categoria"><br><br>
      <div style="width: 40rem;">
        <strong style="color: #FF9D00; font-size: 15px;">Post blog</strong>
        <p style="color:#696969"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
          sapiente libero debitis
          iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
          laborum.</p>
      </div>
    </div>
    <div class="float-right" style="text-align: justify;">
      <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="categoria"><br>
      <div style="width: 40rem;">
        <strong style="color: #FF9D00; font-size: 15px;">Post blog</strong>
        <p style="color:#696969"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
          sapiente libero debitis
          iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
          laborum.</p>
      </div> <br> <br>
      <div style="margin-left: 30rem;">
        <a href="">
          <strong style="color:#FF9D00; font-size: 15px;">Leer todos <img style="width: 20px; height: 20px;"
              src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
        </a>
      </div>
    </div>

  </div>

  <div class="clearfix" style="margin-left: 8rem; margin-right: 5rem;">
    <h1>Lorem ipsum</h1>
    <div class="float-left">
      <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="categoria"><br><br>
      <div style="width: 40rem;">
        <strong style="color: #FF9D00; font-size: 15px;">Post blog</strong>
        <p style="color:#696969"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
          sapiente libero debitis
          iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
          laborum.</p>
      </div>
    </div>
    <div class="float-right" style="text-align: justify;">
      <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="categoria"><br>
      <div style="width: 40rem;">
        <strong style="color: #FF9D00; font-size: 15px;">Post blog</strong>
        <p style="color:#696969"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
          sapiente libero debitis
          iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
          laborum.</p>
      </div> <br> <br>
      <div style="margin-left: 30rem;">
        <a href="">
          <strong style="color:#FF9D00; font-size: 15px;">Leer todos <img style="width: 20px; height: 20px;"
              src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
        </a>
      </div>
    </div>

  </div>





  <footer style="background-color:#fff;" class="imagenfooter clearfix">

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


  </footer>

</body>

</html>