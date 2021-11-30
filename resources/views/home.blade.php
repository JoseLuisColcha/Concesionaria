@extends('layout.main')

@section('title','Inicio')

@section('content')
<h1 class="text-center">CONCESIONARIA KIA</h1>
<br>

<div class="container">

  <div class="row">
    <div class="col-12">
<div class="altura d-flex flex-column justify-content-center">
    
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://loscoches.com/wp-content/uploads/2021/04/carros-deportivos-potencia.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.autocosmos.com/noticias/fotos/preview/NAZ_aabff3cf1ac24f3d9d0c37f6871405d7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://ichef.bbci.co.uk/news/640/cpsprodpb/E4CA/production/_99507585_mediaitem99501693.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </div>
  </div>
  <div class="row ">
  <article>
    <h2 class="my-5">La mejor concesionaria en el Ecuador</h2>
  </article>
  <br>
@foreach ( $caracteristicas as $caract)
        <article class="col-12 col-md-4 text-center mb-5 mb-md-0">
            <div class=" rounded rounded-3 overflow-hidden bg-light text-dark">
                <img src="{{$caract['img']}}" alt="" width="200" height="200" class="rounded-circle m-4">
                <p class="fw-bold mt-5 ">{{strtoupper($caract['Titulo'])}}</p>
                <p class="mt-3 ">{{$caract['Contenido']}}</p>
            </div>
            
        </article>
        @endforeach
    
  </div>
  
  <div class="row my-5">
    <div class="col-12 p-5 mx-3 bg-primary text-white">
          <h3 class="pb-2">ADQUIERE TUS REPUESTOS ORIGINALES</h3>
          <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo minima delectus sint iste sapiente neque? Libero deleniti ut tempora illo provident! Hic molestias iure a saepe reiciendis odit culpa laborum!
          </p>
          </div>
  </div>
  <div class="row pt-5 pb-5">
    <div class="col-6">
  <img src="https://autoteka.pro-theme.com/wp-content/uploads/2019/12/blog-10-2-560x520.jpg" alt="" width="400" height="400">
    </div>
    <div class="col-6">
<h4 class="mb-4">La mejor alternativa la tenemos nosotros</h4>
 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat possimus repudiandae sit minima maiores dolores corporis! Possimus repudiandae ad quo beatae sequi dolorem magni ratione libero ea nostrum ipsum, ab totam nisi asperiores! Nobis neque minus harum sunt velit illum esse laborum a iste ipsum numquam dolore quis impedit eius porro, doloremque at itaque praesentium repellendus officia laboriosam! Voluptatum fuga voluptas fugit? Odio illo aut, et delectus omnis vel quisquam ipsa sunt natus eius? Itaque provident culpa eaque repellat dolore recusandae, minus voluptatem vel sint ipsam, libero blanditiis deserunt rem.</p>
    </div>
    
  </div>
  <h3 class="">ENCUENTRA TU CONCESIONARIO MÁS CERCANO</h3>
  <p class="text-primary">Ubícanos en todas las provincias</p>
  <div class="row pt-3 pb-5">
    <div class="col-12 ">

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23231.126607945316!2d-78.47839922252682!3d-0.10656313134609775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1638286400406!5m2!1ses!2sec" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
  </div>
</div>


@endsection()
