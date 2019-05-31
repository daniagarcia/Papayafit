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
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  @yield('meta')

  <link rel="shortcut icon" href="/assets/Assets Papaya Fit/LogoPapayaFitDos.png">
  @yield('css')
  <!-- <link rel="stylesheet" href="/css/landingpapaya.min.css"> -->
  <link rel="stylesheet" href="/css/home.min.css">
  
  <title>
    Papaya Fit | @yield('title')
  </title>
</head>

<body>

  <audio id="sound-success" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-error" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-info" src="/assets/sounds/success.mp3"></audio>
  <audio id="sound-warning" src="/assets/sounds/success.mp3"></audio>

  <div style="padding-left:3rem !important; padding-top: 2rem !important;">
	
	<div style="">
		<div style="text-align: center; width: 435px; margin-left:5rem !important;">
			<strong style="font-size: 96px;
				line-height: 92px;
				display: flex;
				align-items: center;
				text-align: center;
				letter-spacing: 0.02em;
				color: #F6A60E;
				padding-left: 1rem;">¡Hola! <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="" style="width:145px;"></strong><br>
			<div>
				<strong style="font-size: 24px;
					line-height: 24px;
					display: flex;
					align-items: center;
					text-align: center;
					letter-spacing: -0.02em;
					color: rgba(0, 0, 0, 0.64);
					">Tu plan de nutrición personal esta listo,sólo haz click en el siguiente link</strong>
				<div style="padding-top: 20px; padding-left: 1rem;">
					<a href="">
						<button style="color: #fff;
						background-color: #ff9d00;
						border-color: #ff9d00;
						width: 400px;
						height: 65px;
						border-radius: 1rem;
						font-size: 15px;
						font-size: 19px;
						font-family: 'Open Sans'">https://papayafit.com.mx/bvjlaklnnjvidoov</button>
					</a>
				</div>
				<p style="font-size: 14px;
					line-height: 14px;
					display: flex;
					align-items: center;
					text-align: center;
					letter-spacing: 0.03em;
					color: rgba(0, 0, 0, 0.64);
					padding-left: 6rem;
					padding-top: 10px;">si el link no funciona, da click aquí </p>
				<p style="font-size: 22px;
						line-height: 22px;
						display: flex;
						align-items: center;
						letter-spacing: -0.02em;
						color: rgba(0, 0, 0, 0.64);
						padding-top: 10px;padding-left: 1rem">Si tienes alguna duda sobre tu plan de nutrición, favor de enviarnos un mail a</p>
				<strong style=" font-size: 24px;
						line-height: 24px;
						display: flex;
						align-items: center;
						letter-spacing: -0.02em;    
						color: #FF9D00;
						padding-left: 5rem"><img class="icon-email" src="/assets/Assets Papaya Fit/sobre mail.png" alt="">ayuda@papayafit.com</strong><br>
				<p style="font-size: 24px;
						line-height: 24px;
						display: flex;
						align-items: center;
						letter-spacing: -0.02em;
						color: rgba(0, 0, 0, 0.64);
						padding-left: 9rem">¡Mucha suerte!</p>
				<p style="font-size: 14px;
						line-height: 14px;
						display: flex;
						align-items: center;
						text-align: center;
						letter-spacing: 0.03em;
						color: #ED8410;
						padding-left: 10.5rem">Papaya fit Team</p>
			</div>
		</div>
	</div>
	<!-- <div class="float-right">
			<img src="{{ asset('http://localhost:8000/assets/Assets Papaya Fit/Pasta.png') }}"  alt="" style=" width: 35rem">
	</div> -->
</div>
<!-- src="http://localhost:8000/assets/Assets Papaya Fit/Pasta.png" -->


  <!-- <footer  >
		<img src="/assets/Assets Individuales Papaya Fit/Footer Fondo.png" alt="" style="background-size: cover !important;
		background-position: center !important;
		background-repeat: no-repeat !important;
	  ">
      <div class="float-left">
     
    </div>
    <div class="row menu-footer">    
        <a href="/" class="text-link"><strong style="color:#fff;">Inicio</strong></a><br> 
        <a href="/nosotros" class="text-link"><strong class="menu-footer2">Nosotros</strong></a><br>
        <a href="" class="text-link"><strong class="menu-footer2">FAQ</strong></a><br>      
        <a href="/blog" class="text-link"><strong class="menu-footer2">Blog</strong> </a>    

      <div class="row float-right" style="padding-left: 8rem;">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
        <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">       
          <p class="hashtag-papaya"> <a href=""  class="text-link" >#papayafit</a></p>
        <br><br>        
      </div>
    </div>
    <div class="line-footer">
      <p>__________________________________________________________</p>
    </div>
    <p class="text-email"> <img class="icon-email" src="/assets/Assets Papaya Fit/msj.png" alt="">
      hola@papayafit.com</p>

    <div class="row" style="margin-left:26rem;">
      <small class="doc-footer"> Seguridad</small>
      <small class="doc-footer">Aviso de Privacidad</small>
      <small class="doc-footer">Términos y Condiciones</small>
    </div>

    <div style=" margin-top: 2rem;">
      <small class="rights-footer">
        @PapayaFit, 2019, Todos los derechos reservados
      </small>
    </div>
  </footer> -->


  <!-- @yield('js') -->
  
@section('js')
<script src="/js/home.min.js"></script>
<!-- <script>
function changeColor(id)
{
    document.getElementById("navnaranja").style.backgroundColor= "#fff";
  
}


</script> -->

@endsection


</body>


</html>

