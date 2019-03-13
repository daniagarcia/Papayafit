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
  Inicio
@endsection

@section('css')
  <link rel="stylesheet" href="/css/home.min.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">
          <b>
            Plantilla base Laravel 5 - VUE JS 2
          </b>
        </h1>
        <h2 class="text-center">
          Recuerda utilizar únicamente una sola etiqueta <br> &lt;h1>&lt;/h1>
        </h2>
        <p class="text-center">
          Este proyecto ya cuenta con <b>Bootstrap 4</b> y puedes trabajar con él.
          <br>
          Se hace uso de <b>Sass</b> y <b>ECMAScript 6</b> y próximamente <b>TypeScript</b> (¡Hay que prepararse!)
          <br>
          <b>RECUERDA QUE TODAS LAS IMAGENES DEBEN DE IR MINIFICADAS</b>
        </p>
        <p>
          Para ingresar al panel de administrador da click en el siguiente enlace: <br>
          <a href="{{ env('APP_URL') }}/administrador">
            Link para el dashboard
          </a>
          <small>(Ten en cuenta que el <b>.env</b> debe estar configurado según el <b>.env.example</b>)</small>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="jumbotron text-center">
          Elimina todo éste contenido y trabaja en algo nuevo
        </div>
        <p class="text-justify">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, sapiente esse odio illum voluptas laudantium eius voluptate, beatae cum perferendis voluptatem fuga dicta iusto fugiat quos dolor suscipit aliquid eligendi culpa totam! Quae similique velit ullam nostrum, molestiae ipsum libero amet distinctio, sapiente illo ipsam nihil repellendus ea aspernatur, voluptatum ab omnis. Veniam temporibus totam suscipit? Non dicta voluptatum vero eligendi magnam rerum repellat iusto id debitis repudiandae beatae, incidunt veritatis totam ipsam natus tempore velit! At et nobis perspiciatis. Doloremque, dolorum aliquam itaque vero necessitatibus provident, libero voluptatem excepturi deleniti blanditiis molestias distinctio aut suscipit eum incidunt voluptatibus nesciunt atque quaerat neque velit dignissimos accusantium a? Vero provident recusandae odio obcaecati repudiandae dolorem nesciunt fugiat corporis voluptas porro ipsam tempora accusamus doloribus, praesentium magni alias incidunt! Inventore ullam explicabo incidunt quasi quam, sed eius possimus provident aperiam eligendi doloribus, fuga saepe eum similique perferendis sunt, repellendus omnis laborum! Necessitatibus, accusantium unde, atque cumque id, quas delectus amet odit rem eum quis optio suscipit. Repudiandae, laboriosam necessitatibus. Reiciendis, ipsam. Nesciunt iusto nostrum ipsum hic delectus voluptas dolore facere maiores vitae tenetur? Quisquam commodi iure, accusamus dicta quasi nobis vero, quidem eum quas perspiciatis laudantium rem iste ab perferendis voluptate odio eligendi ex voluptatibus adipisci voluptas possimus aperiam consequatur laboriosam doloremque. Voluptates quam iusto quibusdam placeat suscipit, eaque eum qui nisi deleniti! Accusamus dolorum quo vel soluta enim laboriosam quasi esse nulla praesentium, tenetur quibusdam saepe quae consectetur laborum aperiam quam distinctio expedita debitis! Voluptatem illum, deserunt vitae dignissimos repellat distinctio consequatur in perferendis necessitatibus placeat aspernatur saepe assumenda! Fugiat amet debitis nostrum saepe! Illum maxime debitis perferendis, officiis doloribus at provident totam unde corrupti ipsum illo molestiae. Nesciunt eveniet amet sunt dolorum molestiae harum a aliquam ullam culpa hic, doloribus possimus ducimus commodi quae vel. Laboriosam vitae explicabo asperiores corrupti quis nobis fuga dolore, nisi molestias atque iste, in aliquam fugiat repellat fugit laborum ut voluptas suscipit culpa quod facilis delectus. Tempora, libero tempore, temporibus nam possimus qui, doloribus quis odit velit cum nobis necessitatibus! Quisquam quis aliquid deserunt magnam fugit, ex perspiciatis facilis, sint sed eaque expedita eos eius illo minus tempore molestiae! Culpa eius labore illum autem odit rem libero in molestiae tempora a animi, laborum maiores nemo. Blanditiis ullam quam provident minima modi eligendi eius placeat dignissimos, quis, veritatis id nesciunt minus nisi nobis facere molestiae consequuntur asperiores. Odit ab quasi optio accusamus dolorem commodi modi nostrum nihil? Est autem omnis libero voluptates asperiores. Aliquid dignissimos ut beatae nisi? Explicabo maiores asperiores consectetur fuga rem dicta eveniet nisi quam quidem libero repudiandae sapiente ipsam, a corrupti cupiditate suscipit commodi. Inventore aliquam deleniti est natus fuga accusamus quae molestiae neque et maiores optio odio, nostrum quaerat illum pariatur vitae sed provident ex a nobis cumque dolores cupiditate! Eum nulla recusandae voluptatem sapiente animi. Voluptatem rerum aut esse, nemo, id itaque sint assumenda corrupti consequuntur exercitationem quidem ratione ut tempore eos ex maxime error possimus odio. Mollitia culpa cum esse laborum possimus non itaque doloremque, praesentium dolorum optio! Reiciendis!
        </p>
      </div>
    </div>
  </div>
@endsection

@section('js')
  <script src="/js/home.min.js"></script>
@endsection