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
Papaya Fit
@endsection

@section('css')
<link rel="stylesheet" href="/css/home.min.css">
<!-- <link rel="stylesheet" href="/css/nosotros.min.css"> -->
@endsection

@section('content')



<div class="container-fluid">
 
    <img src="/assets/Assets Papaya Fit/LogoPapayaFitDos.png" alt="" style="width:  270px;padding-top: 3rem;margin-left: 31rem;">
      

</div>

@endsection

@section('js')
<script src="/js/home.min.js"></script>
<!-- <script>
function changeColor(id)
{
    document.getElementById("navnaranja").style.backgroundColor= "#fff";
  
}


</script> -->

@endsection
