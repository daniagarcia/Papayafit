<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="url" content="{{ env('APP_URL') }}">
    <meta name="api" content="{{ env('API_URL') }}" id="api-url">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="csrf-token" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/assets/images/logos/istotipo_512_512.png">

    <link rel="stylesheet" href="/css/dashboard.min.css?{{rand()}}">
    <link rel="stylesheet" href="/css/landingpapaya.min.css">


    <title>Administrador</title>
  </head>
  <body>
<h1></h1>
    <audio id="sound-success" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-error" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-info" src="/assets/sounds/success.mp3"></audio>
    <audio id="sound-warning" src="/assets/sounds/success.mp3"></audio>

    <div id="dashboard"></div>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="/libs/jquery/jquery.min.js"></script>
    <script src="/libs/grasp_mobile_progress_circle-1.0.0.min.js" charset="utf-8"></script>
    <script src="/libs/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/dashboard.min.js?{{rand()}}"></script>
  </body>
</html>
