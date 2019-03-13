<!DOCTYPE html5>
<html lang="es">
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

    <link rel="shortcut icon" href="/assets/images/logos/istotipo_512_512.png">
    @yield('css')

    <title>
      Sistema | @yield('title')
    </title>
  </head>
  <body>

    <audio id="sound-success" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-error" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-info" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-warning" src="/assets/sounds/success.mp3"></audio>


    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="/">
        <img src="/assets/images/logos/logo_h_1900_800.png" alt="Logotipo" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div id="root-content">
            @yield('content')
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="text-center">
              <small class="link-powered">
                Powered By 
                <a href="http://www.supernovaapps.com.mx" class="link-powered">
                  Supernova Apps
                </a>
              </small>
            </div>
          </div>
        </div>
      </div>
    </footer>

    @yield('js')
  </body>
</html>