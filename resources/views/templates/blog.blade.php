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
@endsection

@section('title')
Blog
@endsection

@section('css') 
<link rel="stylesheet" href="/css/home.min.css">
<link rel="stylesheet" href="/css/nosotros.min.css"> 
@endsection

@section('content')
<div class="blog">
  <div style="padding-top:8rem;">
    <strong class="text-blog-one">Noticia Destacada</strong><br>
    <strong class="text-blog-one">en el blog</strong>
  </div>
  <div>
    <p class="text-blog-two">
      lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna
      aliqua.
    </p>
    <div class="container-fluid">
      <div class="row" style="padding-left:9rem;">
        <a href="">
          <h2 style="color:#fff;">Leer artículo <img class="felcha" src="/assets/Assets Papaya Fit/Flecha.png" alt="">
          </h2>
        </a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row" style="margin-left: 64rem;">
      <img class="sizeIcons" src="/assets/Assets Papaya Fit/icons8-facebook-480.png" alt="">
      <img class="sizeIcons" src="/assets/Assets Papaya Fit/instagram.png" alt="">
      <a href="" style="margin-left:2rem;">
        <p style="font-size: 18px; color: #fff; font-weight: bold">#papayafit</p>
      </a>
    </div>
  </div>

</div>
<div class="clearfix blog-categories-div">

  <ul class="row float-left">

    <a class="" href="#"><br></a>

    <a class="" href="#"><strong class="blog-categories">Salud <br></strong></a>

    <p style="color:#FF9D00" >|<br></p>

    <a class="" href="#"><strong class="blog-categories">Cocina<br></strong></a>

    <p style="color:#FF9D00" class="" href="#" >| <br></p>

    <a class="" href="#"><strong class="blog-categories">Ejercicio<br></strong></a>
  </ul>
  <div class="float-right blog-search">
    <img src="/assets/Assets Papaya Fit/magnifying-glass.png" alt="" class="icon-search">
    <input type="text" name="" id="" placeholder="Buscar">
  </div>
</div>


<div class="clearfix div-category">
  <h1>Título</h1>
  <div class="float-left">
    <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="image-categories">
    <div class="div-text-blog">
      <strong class="title-post">Post blog</strong>
      <p class="post"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
        sapiente libero debitis
        iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
        laborum.</p>
    </div>
  </div>
  <div class="float-right" style="text-align: justify;">
    <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="image-categories">
    <div class="div-text-blog">
      <strong class="title-post">Post blog</strong>
      <p class="post"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
        sapiente libero debitis
        iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
        laborum.</p>
    </div><br> <br>
    <div>
      <a href="" class="read-post" class="read-post">
        <strong>Leer todos <img class="icon-flecha" src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
      </a>
    </div>
  </div>
</div>
<div class="clearfix div-category">
  <h1>Lorem ipsum</h1>
  <div class="float-left">
    <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="image-categories">
    <div class="div-text-blog">
      <strong class="title-post">Post blog</strong>
      <p class="post"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
        sapiente libero debitis
        iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
        laborum.</p>
    </div>
  </div>
  <div class="float-right" style="text-align: justify;">
    <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="image-categories">
    <div class="div-text-blog">
      <strong class="title-post">Post blog</strong>
      <p class="post"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
        sapiente libero debitis
        iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
        laborum.</p>
    </div> <br> <br>
    <div>
      <a href="" class="read-post">
        <strong>Leer todos <img class="icon-flecha" src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
      </a>
    </div>
  </div>

</div>

<div class="clearfix div-category">
  <h1>Lorem ipsum</h1>
  <div class="float-left">
    <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="image-categories">
    <div class="div-text-blog">
      <strong class="title-post">Post blog</strong>
      <p class="post"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
        sapiente libero debitis
        iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
        laborum.</p>
    </div>
  </div>
  <div class="float-right" style="text-align: justify;">
    <img src="/assets/Assets Papaya Fit/Blog Art Muestra.png" alt="" class="image-categories"><br>
    <div class="div-text-blog">
      <strong class="title-post">Post blog</strong>
      <p class="post"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facere minus id,
        sapiente libero debitis
        iste dolore ducimus rerum amet, quae facilis possimus voluptatibus voluptates, non commodi totam veniam
        laborum.</p>
    </div> <br> <br>
    <div>
      <a href="" class="read-post">
        <strong>Leer todos <img class="icon-flecha" src="/assets/Assets Papaya Fit/Vector.png" alt=""></strong>
      </a>
    </div>
  </div>

</div>

@endsection

@section('js')
<script src="/js/home.min.js"></script>
@endsection