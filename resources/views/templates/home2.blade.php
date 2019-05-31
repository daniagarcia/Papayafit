@extends('templates.landing')
@section('meta')
<meta name="Title" content="">
<meta name="keywords" content="your, tags" />
<meta name="description" content="150 words" />
{{-- Facebook --}}
<meta property="og:type" content="website" />
<meta property='og:url' content="{{ env('APP_URL') }}/[ruta]" />
<meta property="og:title" content="TITULO DE LA PAGINA" />
<meta property="og:description" content="BREVE DESCRIPCIÓN" />
<meta property="og:image" content="URL DE IMAGEN CORRESPONDIENTE 1200px ANCHO X 630px ALTO" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
@endsection

@section('title')
Inicio
@endsection

@section('css')
<link rel="stylesheet" href="/css/home.min.css">
@endsection
@section('content')
<section class="section">
	<div class="container-fluid">
		<div class="row">
			<!-- <div class="col-12 col-lg-12 px-0 d-none d-lg-block order-lg-2"> -->
					<div class="col-12 col-lg-12 px-0 d-lg-block order-lg-2">
					<div class="image-back">
							<div class="col-4 my-10">
							  <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="Logotipo" class="logopapaya">
							</div>
							<div class="col-12 ">
							  <h1 class="section-one-text"><strong>La mejor nutrición</strong></h1>
							  <h1 class="section-one-text"><strong>a tu medida en tan</strong></h1>
							  <h1 class="section-one-text"><strong>solo 7 pasos.</strong></h1>
							</div>
						  
							<div class="col-10 paragraph-two">
							  <p>Planes de alimentación prácticos, ricos y variados. En papaya fit no nos adaptamos al alimento, lo adaptamos a tu
								estilo de vida! En tan solo 7 clics. Alcanzar tu objetivo nunca fue tan fácil</p>
							</div>
							<div class="container-fluid">
							  <div class="row start-btn">
								<div class="col-12">
						  
								  <h3><a href="/comenzar" class="link-start">Comienza <img class="felcha"
									  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></a>  </h3>
								</div>
						  
							  </div>
							</div>
						  
						  </div>
						  
				<!-- <img src=" {{ asset('img/carousel.png') }} " alt="Puto"> -->
			</div>
			<!-- <div class="col-12 col-lg-6">
				<h2 class="h1-responsive">Lorem ipsum dolor sit amet, consectetur  adipisicing elit. Laborum temporibus vero </h2>
				<ul>
					<li class="mb-3"><i class="fa fa-check pr-3"></i> Lorem Ipsum</li>
					<li class="mb-3"><i class="fa fa-check pr-3"></i> Lorem Ipsum</li>
					<li class="mb-3"><i class="fa fa-check pr-3"></i> Lorem Ipsum</li>
					<li class="mb-3"><i class="fa fa-check pr-3"></i> Lorem Ipsum</li>
				</ul>
			</div> -->
		</div>
	</div>
</section>
<section class="section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-lg-6 px-0 d-none d-lg-block">
				<img src=" {{ asset('img/carousel.png') }} " alt="Puto">
			</div>
			<div class="col-12 col-lg-6">
				<h2 class="h1-responsive">Lorem ipsum dolor sit amet, consectetur  adipisicing elit. Laborum temporibus vero </h2>
				<ul>
					<li class="mb-3"><i class="fa fa-check pr-3"></i> Lorem Ipsum</li>
					<li class="mb-3"><i class="fa fa-check pr-3"></i> Lorem Ipsum</li>
					<li class="mb-3"><i class="fa fa-check pr-3"></i> Lorem Ipsum</li>
					<li class="mb-3"><i class="fa fa-check pr-3"></i> Lorem Ipsum</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-12">Lorem Ipsum Dolor sit Amet Consecuter</div>
				<div class="col-12 col-lg-4 text-center mb-5 mb-lg-0">
					<i class="fa fa-star fa-4x mb-4"></i>
					<h3 class="h3-responsive">Lorem Ipsum Dolor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores voluptas distinctio sapiente et voluptate pariatur cumque iusto nobis, labore doloremque ullam suscipit commodi corporis voluptatibus debitis ratione consequatur nam dolore?</p>
				</div>
				<div class="col-12 col-lg-4 text-center mb-5 mb-lg-0">
					<i class="fa fa-star fa-4x mb-4"></i>
					<h3 class="h3-responsive">Lorem Ipsum Dolor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium provident incidunt illo iusto, facilis odio quaerat, iure quis, ut ea, voluptate expedita nostrum quasi. Praesentium similique rerum animi rem, recusandae!</p>
				</div>
				<div class="col-12 col-lg-4 text-center mb-5 mb-lg-0">
					<i class="fa fa-star fa-4x mb-4"></i>
					<h3 class="h3-responsive">Lorem Ipsum Dolor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At doloremque inventore, error quos, quam aliquam quo dolorum nihil ipsam cum asperiores, dolor sit eius aliquid nemo incidunt ex iusto fuga.</p>
				</div>
			</div>
		</div>
	</section>	
<section class="section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6 mb-5 mb-lg-0">
				<img src=" {{ asset('img/carousel.png') }} " alt="Foto">
			</div>
			<div class="col-12 col-lg-6 mb-5 mb-lg-0">
				<h2 class="h1-responsive mb-4">¿Por qué Papaya Shit es tu mejor opción?</h2>
				<h3 class="h3-responsive">Lorem Ipsum Dolor</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam reprehenderit, rem. Illum dignissimos consectetur nam, ipsum similique odit neque corrupti unde labore, maiores saepe consequuntur vero, laborum repudiandae harum. Doloribus!</p>
				<h3 class="h3-responsive">Lorem Ipsum Dolor</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam reprehenderit, rem. Illum dignissimos consectetur nam, ipsum similique odit neque corrupti unde labore, maiores saepe consequuntur vero, laborum repudiandae harum. Doloribus!</p>
				<h3 class="h3-responsive">Lorem Ipsum Dolor</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam reprehenderit, rem. Illum dignissimos consectetur nam, ipsum similique odit neque corrupti unde labore, maiores saepe consequuntur vero, laborum repudiandae harum. Doloribus!</p>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-4 mb-5 mb-lg-0 d-flex justify-content-center">
				<div>
					<h2 class="h1-responsive">Planes a tu medida</h2>
					<p>
						<a href="/">Escoge tu plan <i class="fa fa-arrow-right"></i></a>
					</p>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 mb-lg-0 d-flex justify-content-center">
				<div class="card">
					<div class="card-header orange">
						<h3 class="text-center mb-0">Título</h3>
					</div>
					<div class="card-body">
						<h2 class="h1-responsive">$299</h2>
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi quisquam animi nemo id, ratione error alias harum, illo. Iure illum corrupti eum sed veritatis velit, ipsam voluptatem illo debitis. Nulla!</p>
						<p><small class="font-small">Puto el que lo lea</small></p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 mb-lg-0 d-flex justify-content-center">
				<div class="card">
					<div class="card-header orange">
						<h3 class="text-center mb-0">Título</h3>
					</div>
					<div class="card-body">
						<h2 class="h1-responsive">$299</h2>
						<p><small class="font-small">Puto el que lo lea</small></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis porro at minima consectetur tenetur officiis, laudantium, iusto eum quidem cumque ducimus. Itaque, eligendi! Expedita minima numquam commodi eligendi, dignissimos.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4 mb-5 mb-lg-0">
				<div class="card">
					<div class="card-body">
						<h2 class="h2-responsive">Testimonio </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti perspiciatis vel ad illum veritatis, doloribus, iure soluta distinctio quibusdam modi! Eveniet amet nam nihil, eaque aliquid odit reprehenderit corporis magni.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 mb-lg-0">
				<div class="card">
					<div class="card-body">
						<h2 class="h2-responsive">Testimonio </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis sunt officiis sed enim ut molestiae nesciunt adipisci. Consectetur quos deleniti, asperiores sequi deserunt, obcaecati porro quidem animi quam impedit aperiam.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 mb-5 mb-lg-0">
				<div class="card">
					<div class="card-body">
						<h2 class="h2-responsive">Testimonio </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum explicabo repudiandae debitis dignissimos, minus, obcaecati qui sed voluptate sequi odit, suscipit nihil earum inventore deleniti libero, eum accusantium dolore consequuntur?</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="footer">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-4 d-flex flex-center mb-5 mb-lg-0">
				<img src=" {{ asset('img/logo.png') }} " alt="Logo" class="img-fluid w-50">
			</div>
			<div class="col-12 col-lg-4 order-lg-3 d-flex flex-center mb-5 mb-lg-0">
				<img src=" {{ asset('img/facebook.png') }} " alt="Facebook" class="mr-3" style="width: 24px; height: 24px">
				<img src=" {{ asset('img/instagram.png') }} " alt="Instagram" style="width: 24px; height: 24px">

			</div>
			<div class="col-12 col-lg-4 d-flex flex-center">
				<ul class="footer-links mb-0">
					<li class="footer-item mb-0"><a href="" class="footer-link"></a>Inicio</li>
					<li class="footer-item mb-0"><a href="" class="footer-link"></a>Nosotros</li>
					<li class="footer-item mb-0"><a href="" class="footer-link">FAQ</a></li>
					<li class="footer-item mb-0"><a href="" class="footer-link">Blog</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@stop