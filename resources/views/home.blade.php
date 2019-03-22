@extends('templates.landing')
<!-- @extends('templates.nosotros') -->
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
  Inicio
@endsection

@section('css')
  <link rel="stylesheet" href="/css/home.min.css">
  <link rel="stylesheet" href="/css/landingpapaya.min.css">

@endsection

@section('content')
  
@endsection

@section('js')
  <script src="/js/home.min.js"></script>
@endsection