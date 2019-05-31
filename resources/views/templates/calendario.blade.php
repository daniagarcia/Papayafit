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
Calendario
@endsection



@section('css')
<link rel="stylesheet" href="/css/home.min.css">
<link rel="stylesheet" href="/css/nosotros.min.css">
@endsection


<!-- 
<div class="container">
  <img src="img_avatar.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Hello World</div>
  </div>
</div> -->







@section('content')
<div class="container-fluid" style="padding-top: 3rem;">
  <div class="row">
    <div class="col-12">
      <div class="clearfix">
        <div class="float-left">
          <div class="clearfix">
            <div class="float-left">
              <img src="/assets/Assets Papaya Fit/p2.png" alt=""
                style="border-radius: 150px; width: 150px; height: 150px;margin-left: 80px;">
            </div>
            <div class="float-right" style="padding-top: 3rem; padding-left: 1rem">
              <strong style="color:#5c5c5c; font-size: 30px;">¡Hola María!</strong><br>
              <strong style="color:#FF9D00; font-size: 20px;">MES 01 AÑO 01</strong>
            </div>
          </div>
        </div>

        <div>

          <div class="float-right">
              <!-- <p>               
                  <input  style="outline: none;color: #FF9D00; font-weight: bold; border-width:2px;border-radius:30px; border-color: #FF9D00; border-block-end-color: #FF9D00;border-style: solid; width: 500px; height: 40px;margin-right: 5rem;" type="text" list="listamotoresbusqueda">
            </p>
                
                <datalist id="listamotoresbusqueda">
                
                    <option class="semanas">Semana 1</option>
              <option class="semanas" >Semana 2</option>
              <option class="semanas" >Semana 3</option>
              <option class="semanas" selected>Semana 4</option>
                
                </datalist> -->
            <p style="color: #5c5c5c; font-size: 14px;margin:0;padding-left: 1rem;">Selecciona la semana de tu plan</p>
            <select
              style="outline: none;color: #FF9D00; font-weight: bold; border-width:2px;border-radius:30px; border-color: #FF9D00; border-block-end-color: #FF9D00;border-style: solid; width: 500px; height: 40px;margin-right: 5rem;">
              <option class="semanas" value="volvo">Semana 1</option>
              <option class="semanas" value="saab">Semana 2</option>
              <option class="semanas" value="vw">Semana 3</option>
              <option class="semanas" value="audi" selected>Semana 4</option>
            </select>

          </div>
          

        </div>

      </div>

    </div>

  </div>

</div>


<div class="imgCalendario" style="height: 20rem;margin-top: 2rem">
  <div style="text-align: center;padding-top: 3rem;">
    <p style="color:#fff; font-weight: bold; font-size: 20px;">SEMANA 1 - AÑO 1</p>
    <strong style="font-size: 4rem; color: #fff;">Tu plan de nutrición</strong><br>
    <strong style="font-size: 4rem;color: #fff;">personalizado</strong>
  </div>
</div>

<div class="container-fluid" style="padding-top:3rem;">
  <div class="row">
    <div class="col-lg">
      <!--div día-->

      <div class="divcalendario sombraplatillos">
       
        <div class="row">
            
          <div class="divplatillo divprimero">
            <p class="dias"> <strong>Día 1</strong></p>
          </div>
          <div class="divplatillo">
              @foreach($meals as $meal)
              <input type="hidden" value="{{$meal->id}}">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">DESAYUNO</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/avena y chia 1.jpg" alt="">
              <div onClick="modalSave(id)" id='btnsave' class="overlay">
                {{$meal -> name}}<img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                  alt=""></div>
            </div>
            @endforeach
          </div>
          
          <div class="divplatillo">
            @foreach($snack as $snack)
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/canasta 1.jpg" alt="">
              <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack -> name}} <img class="felchacalendario"
                  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
            </div>
            @endforeach
          </div>
          <div class="divplatillo">
              @foreach($comida as $com)
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">COMIDA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/ceviche 1.jpg" alt="">
              <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$com -> name}}<img class="felchacalendario"
                  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
            </div>
            @endforeach
          </div>
         <div class="divplatillo">
            @foreach($snack2 as $snack2)
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/chop 1.jpg" alt="">
              <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack2 -> name}} <img class="felchacalendario"
                  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
            </div>
            @endforeach
          </div>
           <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
              @foreach($cena as $cena)
            <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
              <strong class="comida">CENA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/ensalada 1 .jpg" alt="">
              <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$cena -> name}} <img class="felchacalendario"
                  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
            </div>
            @endforeach
          </div>
         <!--aqui-->
        </div>
      
      </div><br>

         <div class="divcalendario sombraplatillos">
       
        <div class="row">
            
          <div class="divplatillo divprimero">
            <p class="dias"> <strong>Día 2</strong></p>
          </div>
          <div class="divplatillo">
              @foreach($meals2 as $meal2)
              <input type="hidden" value="{{$meal2->id}}">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">DESAYUNO</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/hamburguesa 2 .jpg" alt="">
              <div onClick="modalSave(id)" id='btnsave' class="overlay">
                {{$meal2 -> name}}<img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                  alt=""></div>
            </div>
            @endforeach
          </div>
          
          <div class="divplatillo">
            @foreach($snackdos as $snackdos)
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/hotcakes 1.jpg" alt="">
              <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snackdos -> name}} <img class="felchacalendario"
                  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
            </div>
            @endforeach
          </div>
          <div class="divplatillo">
              @foreach($comida2 as $com2)
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">COMIDA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/licuado 2.jpg" alt="">
              <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$com2 -> name}}<img class="felchacalendario"
                  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
            </div>
            @endforeach
          </div>
         <div class="divplatillo">
            @foreach($snack22 as $snack22)
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/piña 1.jpg" alt="">
              <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack22 -> name}} <img class="felchacalendario"
                  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
            </div>
            @endforeach
          </div>
           <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
              @foreach($cena2 as $cena2)
            <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
              <strong class="comida">CENA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/tostada de humus 3 .jpg" alt="">
              <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$cena2 -> name}} <img class="felchacalendario"
                  src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
            </div>
            @endforeach
          </div>
         <!--aqui-->
        </div>
      
      </div><br>

      <div class="divcalendario sombraplatillos">
       
          <div class="row">
              
            <div class="divplatillo divprimero">
              <p class="dias"> <strong>Día 3</strong></p>
            </div>
            <div class="divplatillo">
                @foreach($meals3 as $meal3)
                <input type="hidden" value="{{$meal2->id}}">
              <div class="divcomida" style="padding-top: 1.2rem;">
                <strong class="comida">DESAYUNO</strong>
              </div>
              <div class="container">
                <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/avena y chia 2.jpg" alt="">
                <div onClick="modalSave(id)" id='btnsave' class="overlay">
                  {{$meal3 -> name}}<img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                    alt=""></div>
              </div>
              @endforeach
            </div>
            
            <div class="divplatillo">
              @foreach($snack3 as $snack3)
              <div class="divcomida" style="padding-top: 1.2rem;">
                <strong class="comida">SNACK</strong>
              </div>
              <div class="container">
                <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/canasta 4 .jpg" alt="">
                <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack3 -> name}} <img class="felchacalendario"
                    src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
              </div>
              @endforeach
            </div>
            <div class="divplatillo">
                @foreach($comida3 as $com3)
              <div class="divcomida" style="padding-top: 1.2rem;">
                <strong class="comida">COMIDA</strong>
              </div>
              <div class="container">
                <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/ceviche 3 .jpg" alt="">
                <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$com3 -> name}}<img class="felchacalendario"
                    src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
              </div>
              @endforeach
            </div>
           <div class="divplatillo">
              @foreach($snack33 as $snack33)
              <div class="divcomida" style="padding-top: 1.2rem;">
                <strong class="comida">SNACK</strong>
              </div>
              <div class="container">
                <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/chop 2.jpg" alt="">
                <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack33 -> name}} <img class="felchacalendario"
                    src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
              </div>
              @endforeach
            </div>
             <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
                @foreach($cena3 as $cena3)
              <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
                <strong class="comida">CENA</strong>
              </div>
              <div class="container">
                <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                  src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/ensalada 2.jpg" alt="">
                <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$cena3 -> name}} <img class="felchacalendario"
                    src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
              </div>
              @endforeach
            </div>
           <!--aqui-->
          </div>
        
        </div><br>

        <div class="divcalendario sombraplatillos">
       
            <div class="row">
                
              <div class="divplatillo divprimero">
                <p class="dias"> <strong>Día 4</strong></p>
              </div>
              <div class="divplatillo">
                  @foreach($meals4 as $meal4)
                  <input type="hidden" value="{{$meal2->id}}">
                <div class="divcomida" style="padding-top: 1.2rem;">
                  <strong class="comida">DESAYUNO</strong>
                </div>
                <div class="container">
                  <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/hamburguesa 3 .jpg" alt="">
                  <div onClick="modalSave(id)" id='btnsave' class="overlay">
                    {{$meal4 -> name}}<img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                      alt=""></div>
                </div>
                @endforeach
              </div>
              
              <div class="divplatillo">
                @foreach($snack4 as $snack4)
                <div class="divcomida" style="padding-top: 1.2rem;">
                  <strong class="comida">SNACK</strong>
                </div>
                <div class="container">
                  <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/hotcakes 3 .jpg" alt="">
                  <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack4 -> name}} <img class="felchacalendario"
                      src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
                </div>
                @endforeach
              </div>
              <div class="divplatillo">
                  @foreach($comida4 as $com4)
                <div class="divcomida" style="padding-top: 1.2rem;">
                  <strong class="comida">COMIDA</strong>
                </div>
                <div class="container">
                  <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/lucuado 3.jpg" alt="">
                  <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$com4 -> name}}<img class="felchacalendario"
                      src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
                </div>
                @endforeach
              </div>
             <div class="divplatillo">
                @foreach($snack44 as $snack44)
                <div class="divcomida" style="padding-top: 1.2rem;">
                  <strong class="comida">SNACK</strong>
                </div>
                <div class="container">
                  <img class="imagencomida" src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/piña 3.jpg" alt="">
                  <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack44 -> name}} <img class="felchacalendario"
                      src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
                </div>
                @endforeach
              </div>
               <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
                  @foreach($cena4 as $cena4)
                <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
                  <strong class="comida">CENA</strong>
                </div>
                <div class="container">
                  <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                    src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/tostadas de hummus 1.jpg" alt="">
                  <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$cena4 -> name}} <img class="felchacalendario"
                      src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
                </div>
                @endforeach
              </div>
             <!--aqui-->
            </div>
          
          </div><br>

          <div class="divcalendario sombraplatillos">
       
              <div class="row">
                  
                <div class="divplatillo divprimero">
                  <p class="dias"> <strong>Día 5</strong></p>
                </div>
                <div class="divplatillo">
                    @foreach($meals5 as $meal5)
                    <input type="hidden" value="{{$meal5->id}}">
                  <div class="divcomida" style="padding-top: 1.2rem;">
                    <strong class="comida">DESAYUNO</strong>
                  </div>
                  <div class="container">
                    <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C1.jfif" alt="">
                    <div onClick="modalSave(id)" id='btnsave' class="overlay">
                      {{$meal5 -> name}}<img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                        alt=""></div>
                  </div>
                  @endforeach
                </div>
                
                <div class="divplatillo">
                  @foreach($snack5 as $snack5)
                  <div class="divcomida" style="padding-top: 1.2rem;">
                    <strong class="comida">SNACK</strong>
                  </div>
                  <div class="container">
                    <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C2.jfif" alt="">
                    <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack5 -> name}} <img class="felchacalendario"
                        src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
                  </div>
                  @endforeach
                </div>
                <div class="divplatillo">
                    @foreach($comida5 as $com5)
                  <div class="divcomida" style="padding-top: 1.2rem;">
                    <strong class="comida">COMIDA</strong>
                  </div>
                  <div class="container">
                    <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C3.jfif" alt="">
                    <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$com5 -> name}}<img class="felchacalendario"
                        src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
                  </div>
                  @endforeach
                </div>
               <div class="divplatillo">
                  @foreach($snack55 as $snack55)
                  <div class="divcomida" style="padding-top: 1.2rem;">
                    <strong class="comida">SNACK</strong>
                  </div>
                  <div class="container">
                    <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C4.jfif" alt="">
                    <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$snack55 -> name}} <img class="felchacalendario"
                        src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
                  </div>
                  @endforeach
                </div>
                 <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
                    @foreach($cena5 as $cena5)
                  <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
                    <strong class="comida">CENA</strong>
                  </div>
                  <div class="container">
                    <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                      src="/assets/Assets Papaya Fit/PLATILLOS/C5.jfif" alt="">
                    <div  onClick="modalSave(id)" id='btnsave' class="overlay">{{$cena5 -> name}} <img class="felchacalendario"
                        src="/assets/Assets Papaya Fit/Flecha.png" alt=""></div>
                  </div>
                  @endforeach
                </div>
               <!--aqui-->
              </div>
            
            </div><br>
      
      <!--div día-->
      <!-- <div class="divcalendario sombraplatillos">
        <div class="row">
          <div class="divplatillo divprimero">
            <p class="dias"> <strong>Día 2</strong></p>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">DESAYUNO</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C1.jfif" alt="">
              
              <div onClick="modalSave(id)" id='btnsave' class="overlay">
                  Huevo estrellado con ramen <img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                    alt=""></div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C2.jfif" alt="">
              
              <div onClick="modalSave(id)" id='btnsave' class="overlay">
                  Huevo estrellado con ramen <img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                    alt=""></div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">COMIDA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C3.jfif" alt="">
              
              <div onClick="modalSave(id)" id='btnsave' class="overlay">
                  Huevo estrellado con ramen <img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                    alt=""></div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C4.jfif" alt="">
              
              <div onClick="modalSave(id)" id='btnsave' class="overlay">
                  Huevo estrellado con ramen <img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                    alt=""></div>
            </div>
          </div>
          <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
            <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                src="/assets/Assets Papaya Fit/PLATILLOS/C5.jfif" alt="">
              
              <div onClick="modalSave(id)" id='btnsave' class="overlay">
                  Huevo estrellado con ramen <img class="felchacalendario" src="/assets/Assets Papaya Fit/Flecha.png"
                    alt=""></div>
            </div>
          </div>
        </div>
      </div><br> -->
      <!--div día-->
      <!-- <div class="divcalendario sombraplatillos">
        <div class="row">
          <div class="divplatillo divprimero">
            <p class="dias"> <strong>Día 3</strong></p>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">DESAYUNO</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C1.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C2.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">COMIDA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C3.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C4.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
            <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                src="/assets/Assets Papaya Fit/PLATILLOS/C5.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
        </div>
      </div><br> -->
      <!--div día-->
      <!-- <div class="divcalendario sombraplatillos">
        <div class="row">
          <div class="divplatillo divprimero">
            <p class="dias"> <strong>Día 4</strong></p>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">DESAYUNO</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C1.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C2.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">COMIDA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C3.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C4.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
            <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                src="/assets/Assets Papaya Fit/PLATILLOS/C5.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
        </div>
      </div><br> -->
      <!--div día-->
      <!-- <div class="divcalendario sombraplatillos">
        <div class="row">
          <div class="divplatillo divprimero">
            <p class="dias"> <strong>Día 5</strong></p>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">DESAYUNO</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C1.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C2.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">COMIDA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C3.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C4.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
            <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                src="/assets/Assets Papaya Fit/PLATILLOS/C5.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
        </div>
      </div><br> -->
      <!--div día-->
      <!-- <div class="divcalendario sombraplatillos">
        <div class="row">
          <div class="divplatillo divprimero">
            <p class="dias"> <strong>Día 6</strong></p>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">DESAYUNO</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C1.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C2.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">COMIDA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C3.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C4.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
            <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                src="/assets/Assets Papaya Fit/PLATILLOS/C5.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
        </div>
      </div><br> -->
      <!--div día-->
      <!-- <div class="divcalendario sombraplatillos">
        <div class="row">
          <div class="divplatillo divprimero">
            <p class="dias"> <strong>Día 7</strong></p>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">DESAYUNO</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C1.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C2.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">COMIDA</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C3.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo">
            <div class="divcomida" style="padding-top: 1.2rem;">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" src="/assets/Assets Papaya Fit/PLATILLOS/C4.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
          <div class="divplatillo" style="border-bottom-right-radius: 1rem; border-top-right-radius: 1rem;">
            <div class="divcomida" style="padding-top: 1.2rem;border-top-right-radius: 1rem">
              <strong class="comida">SNACK</strong>
            </div>
            <div class="container">
              <img class="imagencomida" style="border-bottom-right-radius: 1rem;"
                src="/assets/Assets Papaya Fit/PLATILLOS/C5.jfif" alt="">
              <div class="overlay">Huevo estrellado con ramen</div>
            </div>
          </div>
        </div>
      </div><br> -->

      <!--div día-->


    </div>

  </div>

</div>
<!-- </div> -->

<div class="container-fluid">
  <div class="row">
    <div class="col-12" style="padding-left: 30rem;padding-top: 3rem;">
      <div style="text-align: center; width: 500px;">
        <h1 style="font-size: 50px; font-weight: bold;">¡Vamos de compras!</h1>
        <div style="text-align: center;">
          <p style="color: #5c5c5c; text-align: center; font-size: 20px;">
            Sabemos lo difícil que puede ser comprar todo lo necesario para tu plan, asi que hemos hecho una lista para
            ti.
          </p>
        </div>

        <div style="">
          <a href="">
            <button class="btndescarga" style="font-size: 17px;  font-family: 'Open Sans';">Descarga tu
              lista de súpermercado</button>
          </a>
        </div>
        <p>si el link no funciona, da click aqui</p>
      </div>
    </div>
  </div>

</div>

<div>
  <div class="clearfix">
    <div style="width: 22rem; padding-left: 4rem;" class="float-left">
      <strong style="font-size: 3rem;color: #696969">Resumen de tu perfil</strong>
    </div>
    <div class="container-fluid">
      <div class="float-right row" style="padding-right: 6rem;">
        <div class="divdatos">
          <img class="icondatos" src="/assets/Assets Papaya Fit/resultados/event.png" alt="">
          <h4 style="color:#696969"  id="edadinfo"></h4>
        </div>
        <div class="divdatos">
          <img class="icondatos" src="/assets/Assets Papaya Fit/resultados/resize.png" alt="">
          <h4 style="color:#696969" id="alturainfo"></h4>
        </div>
        <div class="divdatos" style="border-color: transparent !important;">
          <img class="icondatos" src="/assets/Assets Papaya Fit/resultados/weight-scale.png" alt="">
          <h4 style="color:#696969" id="pesoinfo"></h4>
        </div>

      </div>
    </div>


  </div>

  <div class="container-fluid">

    <div style="padding-top: 3rem;" class="row">
      <div
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26   rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:1rem;">
            <strong style="font-size:25px; color:#fff;">BMI</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>
        <div style="padding:2rem;">
          <img style="width: 20rem;" src="/assets/Assets Papaya Fit/resultados/speedometer.png" alt="">
          <div class="row" style="padding-left: 5rem; padding-top: 4rem">
            <p style="font-size: 25px;color: #696969; font-weight: bold;">Tu peso es <br> </p>
            <p style="font-size: 25px;color: #FF9D00; font-weight: bold;" id="imc"></p>

          </div>

        </div>
      </div>
      <div
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:1rem;">
            <strong style="font-size:25px; color:#fff;">Edad Metabólica</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>
        <div style="padding:2rem;">
          <img style="width: 12rem; height: 12rem;" src="/assets/Assets Papaya Fit/resultados/happy.png" alt="">
          <div class="row" style="padding-left: 1rem; padding-top: 3rem">
            <p style="font-size: 20px;color: #696969; font-weight: bold;">Tu edad metabólica <br> </p><br>
            <p style="font-size: 20px;color: #696969; font-weight: bold;">es de <br>
              <p style="font-size: 20px;color: #FF9D00; font-weight: bold;" id="edadm"></p>
            </p>
          </div>
        </div>
      </div>
      <div
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:1rem;">
            <strong style="font-size:25px; color:#fff;">Requerimiento energético</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>
        <div style="padding:2rem;">
          <img style="width: 22rem; height: 12rem;" src="/assets/Assets Papaya Fit/resultados/graphic.png" alt="">
          <div class="row" style="padding-left: 1rem; padding-top: 3rem">
            <p style="font-size: 20px;color: #696969; font-weight: bold;">Calorias recomendadas:<br> </p><br>
            <p style="font-size: 20px;color: #FF9D00; font-weight: bold;" id="kal"></p>
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="container-fluid">
    <div class="row" style="padding-top: 3rem;">
      <div
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:1rem;">
            <strong style="font-size:25px; color:#fff;">Agua Recomendada</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>
        <div style="padding:2rem;">
          <img style="width: 12rem; height: 12rem;" src="/assets/Assets Papaya Fit/resultados/Group.png" alt="">
          <div class="row" style="padding-left: 5rem; padding-top: 3rem">
            <p style="font-size: 20px;color: #FF9D00; font-weight: bold;" id="agua"><br></p><br>
            <p style="font-size: 20px;color: #696969; font-weight: bold;">de agua al día<br> </p>

          </div>
        </div>
      </div>
      <div
        style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px; text-align:center; margin-left: 2rem;"
        class="sombraprecios">
        <div
          style="width:26rem; height:5rem; background-color: #FF9D00;  border-top-right-radius: 30px; border-top-left-radius: 30px; text-align: center;">
          <div style="padding-top:1rem;">
            <strong style="font-size:25px; color:#fff;">Peso recomendado</strong>
            <img class="iconquestion" src="/assets/Assets Papaya Fit/resultados/information.png" alt="">
          </div>
        </div>

        <div style="padding:1rem;">
          <strong style="font-size: 100px;color: #FF9D00" id="rec"></strong>
          <p style="font-size: 25px; color: #696969; font-weight: bold;">Peso alcanzable durante el primer mes de tu
            plan de
            alimentación</p>
          <p style="font-size: 10px; color: #696969"></p>
        </div>
      </div>
      <div style="width: 26rem; height: 25rem; border-width: 1px;border-radius: 30px;  margin-left: 2rem;" class="">

        <div>
          <img style="width: 80px; height: 80px;margin-left: 9rem;" src="/assets/Assets Papaya Fit/resultados/Idea.png"
            alt="">
          <strong style="font-size: 40px">Recomendaciones</strong>
          <div style="padding-top:1rem;">
            <div class="textor">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <!-- <img src="/assets/Assets Papaya Fit/Checkmark.png" class="icono" alt=""> -->
                      <p class="text-recomendaciones"><img src="/assets/Assets Papaya Fit/Checkmark.png" class="iconocalendario" alt="">No
                        pasar más de 3-5 horas sin comer, pero no comer antes de cada
                        dos horas</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <!-- <img src="/assets/Assets Papaya Fit/Checkmark.png" class="iconocalendario" alt=""> -->
                      <p class="text-recomendaciones"><img src="/assets/Assets Papaya Fit/Checkmark.png" class="iconocalendario" alt="">No
                        se recomienda el uso de bebidas alcohlicas con tu plan
                        alimenticio</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <!-- <img src="/assets/Assets Papaya Fit/Checkmark.png" class="iconocalendario" alt=""> -->
                      <p class="text-recomendaciones"> <img src="/assets/Assets Papaya Fit/Checkmark.png" class="iconocalendario"
                          alt="">Este plan fue elaborado especialmente para ti, para óptimos
                        resultados síguelo correctamente</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <!-- <img src="/assets/Assets Papaya Fit/Checkmark.png" class="iconocalendario" alt=""> -->
                      <p class="text-recomendaciones"><img src="/assets/Assets Papaya Fit/Checkmark.png" class="iconocalendario"
                          alt="">Puedes intercambiar comidas únicamente por comidas de su propia
                        categoría en otros días</p>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>


  </div>

 


</div>
<div style="padding-left: 33rem;padding-top: 5rem;">
  <a href="/quiz-two">
    <button class="btndescarga" style="font-size: 26px;  font-family: 'Open Sans'; font-weight: bold">Cambiar plan</button>
  </a>
</div>

<!-- <div class="divtitulo">
  <h1 class=""></h1><br>
  <button type="button" onClick="modalSave(id)" id='btnsave' class='btnnuevo'>Nuevo</button>

</div> -->

<div class="modal" id="modalsave" tabindex="-1" role="" style=" overflow-y: scroll;">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content scrollmodal sombra" >
      <div class="modal-header" style="background:#FF9D00;">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 20rem;color:#fff; ">DESAYUNO</h5>
        <button type="button" class="close" data-dismiss="modal" id="cerrar" onClick="closeModal()" aria-label="Close">
          <span style="color: white;" aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" class="form" id="form" action="/api/registro">
          <!-- {{ csrf_field() }}        -->

          <div class="celarfix">
            @foreach($mealsdetalles as $detalles)
            <input type="hidden" value="{{$detalles->id}}">
            <div class="float-left">
              <img src="/assets/Assets Papaya Fit/fotos-comidas/fotos papaya fit/tostada de humus 3 .jpg" alt="" style="width: 22rem;height: 38rem;">
            </div>
            <div class="float-right">
              <div style="width: 25rem;">
                <h1 style="font-weight: bold;">{{$detalles -> name}}</h1>
                <strong style="color: #FF9D00;"> <img src="/assets/Assets Papaya Fit/stopwatch.png" alt=""
                    style="height: 35px;"> 15 - 20 min</strong>
                <div class="clearfix">
                  <div class="float-left" style="width: 12rem;">
                    <img src="/assets/Assets Papaya Fit/diet.png" style="height: 100px;" alt=""><br>
                    <strong>INGREDIENTES</strong> <br><br>
                    <p style="color:orange;font-size: 16px;text-align: justify;"><img src="/assets/Assets Papaya Fit/Checkmark.png"  class="icono-detalle" alt="">{{$detalles -> description}}</p>
                    <!-- <p><img src="/assets/Assets Papaya Fit/Group (2).png" class="icono-detalle" alt=""> 150 gr de cebollines</p>
                    <p style="color:orange"><img src="/assets/Assets Papaya Fit/Checkmark.png"  class="icono-detalle" alt="">350 gr de ramen deshidratado sin sal</p>
                    <p><img src="/assets/Assets Papaya Fit/Group (2).png" class="icono-detalle" alt=""> 1 cucharada de consome</p> -->
                   
                  </div>
                  <div class="float-right" style="width: 12rem">
                    <img src="/assets/Assets Papaya Fit/cooking-pot.png" style="height: 100px;" alt=""><br>
                    <strong>PREPARACIÓN</strong><br><br>
                    <p>1.Lorem ipsum dolor sit amet consectetur</p>
                    <p>2.Lorem ipsum dolor sit amet consectetur</p>
                    <p>3.Lorem ipsum dolor sit amet consectetur</p>
                    <p>4.Lorem ipsum dolor sit amet consectetur</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>


        </form>
      </div>
    </div>
  </div>
</div>





@endsection

@section('js')
<script src="./libs/jquery/jquery.min.js"></script>
<script src="/js/home.min.js"></script>
<script src="./js/quiz.min.js"></script>
<script src="./js/resultados.min.js"></script>
<script src="./js/question.min.js"></script>
@endsection