@extends('layout.main')

@section('title','Personal')

@section('content')
<h1>¿QUIENES SOMOS?</h1>
<hr>
<div class="container altura d-flex flex-column justify-content-center">

    <h2 class="text-center my-5">Nuestro Personal</h2>
    <p class=" mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur explicabo, soluta modi sint enim asperiores a dolorum quidem non sunt alias inventore impedit odit cum quae atque velit nemo optio.</p>

     <main class="row">
        @foreach ( $persons as $person)
        <article class="col-12 col-md-4 text-center mb-5 mb-md-0">

            <div class=" rounded rounded-3 overflow-hidden bg-light text-dark">
                <p class="fw-bold mt-5 ">{{strtoupper($person['Nombre'])}} {{strtoupper($person['Apellido'])}}</p>
                <img src="{{$person['img']}}" alt="" width="200" height="200" class="rounded-circle">
                <p class="mt-3 ">{{$person['Web']}}</p>
                <ul class="list-unstyled my-5">
                <li>{{$person['Contacto']}}</li>
                </ul>
                <a class=" border border-primary text-primary py-3 d-block text-decoration-none opacity-75" href="#">Más Información</a>
            </div>
            <br>
            <hr>
        </article>
        @endforeach
    </main>
    <footer class="mt-5 text-center">
        <p class="text-muted">2021 - Todos los derechos reservados</p>
    </footer>
</div>
@endsection()