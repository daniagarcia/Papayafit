@extends('templates.landing')

@section('meta')
  <meta name="Title" content="">
  <meta name="keywords" content="your, tags"/>
  <meta name="description" content="150 words"/>
  {{-- Facebook --}}
  <meta property="og:type" content="website" />
  <meta property='og:url' content="{{ env('APP_URL') }}/[ruta]"/>
  <meta property="og:title" content="TITULO DE LA PAGINA" />
  <meta property="og:description" content="BREVE DESCRIPCIÓN"/>
  <meta property="og:image" content="URL DE IMAGEN CORRESPONDIENTE 1200px ANCHO X 630px ALTO" />
@endsection

@section('title')
  Entrar
@endsection

@section('css')
  <link rel="stylesheet" href="/css/access.min.css?{{rand()}}">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card text-center">
          <div class="card-header">
            Iniciar Sesión
          </div>
          <div class="card-body">
            <form id="form-login">
              <div class="input-group input-group-right mb-3">
                <input type="email" class="form-control" placeholder="" name="email" id="username" value="admin@supernovaapps.com.mx">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-lock"></i>
                  </span>
                </div>
              </div>
              <div class="input-group input-group-left mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-key"></i>
                  </span>
                </div>
                <input type="password" class="form-control" name="Contraseña" id="password" value="adminsystem123">
              </div>
            </form>
          </div>
          <div class="card-footer text-right">
            <a href="/olvide-mi-contrasena" class="btn btn-primary btn-round" id="passrecover" title="Olvidé mi contraseña">
              <i class="fas fa-question"></i>
            </a>
            <button type="button" class="btn btn-primary btn-round" id="login" title="Entrar">
              <i class="fas fa-sign-in-alt"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
@endsection

@section('js')
  <script src="/js/access.min.js?{{rand()}}"></script>
@endsection
