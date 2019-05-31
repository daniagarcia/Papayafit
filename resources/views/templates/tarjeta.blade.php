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

    <link rel="shortcut icon" href="/assets/Assets Papaya Fit/PapayaLogo.png">
    @yield('css')

    @section('css')
    <link rel="stylesheet" href="/css/home.min.css">
    <!-- <link rel="stylesheet" href="/css/landingpapaya.min.css"> -->

    @endsection

    <title>Correo</title>
</head>

<body>
<nav  class="navbar navbar-expand-lg fixed-top nav-background" >
        <a class="navbar-brand" href="/">
          <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="Logotipo" class="logopapaya-nav">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

    <div class="imagenfootercomenzar">
        <div class="sombra-card" style="border-color:transparent;width: 55rem;height: 24rem;border-style: solid; margin-left: 4rem;">

                
                <form action="#" class="credit-card-div" >
                        <img src="/assets/Assets Papaya Fit/tarj.png" style=" margin-top: -2rem;margin-bottom: -2rem;width: 43rem;margin-left: 6rem;height: 9rem;" alt="">
                        <!-- <div style="border-color: orange; border-radius: 25px; width: 211px; border-style: solid;"> -->
                                <label style="font-size:39px;font-weight: bold;padding-left: 8rem;" class="form-check-label" for="exampleCheck1">$199.00</label>
                            <!-- </div> -->
                    <div class="panel panel-default" style="padding-left: 8rem;width: 54rem;">
                        <div class="panel-heading">
        
                            <div class="row ">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" placeholder="Enter Card Number" />
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <span class="help-block text-muted small-font"> Expiry Month</span>
                                    <input type="text" class="form-control" placeholder="MM" />
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <span class="help-block text-muted small-font"> Expiry Year</span>
                                    <input type="text" class="form-control" placeholder="YY" />
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <span class="help-block text-muted small-font"> CCV</span>
                                    <input type="text" class="form-control" placeholder="CCV" />
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <img src="assets/img/1.png" class="img-rounded" />
                                </div>
                            </div>
                            <div class="row ">
                                <!-- <div class="col-md-12 pad-adjust">
        
                                    <input type="text" class="form-control" placeholder="Name On The Card" />
                                </div> -->
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-12 pad-adjust">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" checked class="text-muted"> Save details for fast payments <a
                                                href="#"> learn how ?</a>
                                        </label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row ">
                                <!-- <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                                     <input type="submit" class="btn btn-danger" value="CANCEL" />
                                </div> --> <br>
                                <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust" style="padding-top: 2rem;">
                                        <button class="btn-start" style=""><a href="/render" class="link-start" style="color:#fff;font-size:23px;">PAGAR</a></button>
                                    <!-- <input type="submit" class="btn btn-warning btn-block" value="PAY NOW" /> -->
                                </div>
                            </div>
        
                        </div>
                    </div>
                </form>

        </div>
       
        <div class="container-fluid">
      <div class="row" style="padding-left: 19rem; padding-top: 11rem;">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">       
          <p class="hashtag-papayaa">#papayafit</p>
          
        <br><br>        
      </div>
    </div>
  
      <small style="color:#fff;"> @PapayaFit, 2019, Todos los derechos reservados</small>
    </div>
</body>

</html>