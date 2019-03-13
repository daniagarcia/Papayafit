@extends('templates.landing')

@section('title')
  Olvidé mi contraseña
@endsection

@section('css')
  <link rel="stylesheet" href="/css/password_recovery.min.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="card text-center">
          <div class="card-header">
            <b>¿Has olvidado tu contraseña?</b>
          </div>
          <div class="card-body">
            <p class="text-center">
              Para recuperar tu contraseña, ingresa el correo electrónico con el que te has registrado y en el te enviaremos las instrucciones de recuperación.
            </p>
            <form id="form-login">
              <div class="input-group input-group-left mb-3">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon1">
                    <i class="fas fa-envelope"></i>
                  </span>
                </div>
                <input type="email" class="form-control" placeholder="" name="email" id="username">
              </div>
            </form>
          </div>
          <div class="card-footer text-right">
            <a href="/entrar" class="btn btn-default btn-round" id="back-login" title="Regresar">
              <i class="fas fa-arrow-left"></i>
            </a>
            <button type="button" class="btn btn-primary btn-round" id="login" title="Enviar">
              <i class="fas fa-check"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
@endsection

@section('js')
  <script src="/js/password_recovery.min.js"></script>
@endsection