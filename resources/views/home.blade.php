@extends('layout.main')

@section('title','Inicio')

@section('content')
<h1>Bienvenidos</h1>

<div class="container altura d-flex flex-column justify-content-center">
    
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://loscoches.com/wp-content/uploads/2021/04/carros-deportivos-potencia.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://loscoches.com/wp-content/uploads/2021/04/carros-deportivos-potencia.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://loscoches.com/wp-content/uploads/2021/04/carros-deportivos-potencia.jpg" class="d-block w-100" alt="...">
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

<section>
  <p></p>
</section>
</figure>


</div>


<hr>

@endsection()
