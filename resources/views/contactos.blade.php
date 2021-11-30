@extends('layout.main')

@section('title','Contactos')

@section('content')
<h1>GOOGLE MAP</h1>

<P>Bienvenido - {{$name}}</P>
<p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23231.126607945316!2d-78.47839922252682!3d-0.10656313134609775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sec!4v1638286400406!5m2!1ses!2sec" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</p>
<h2> Nuestra Localización</h2>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa consequuntur corporis commodi, enim deleniti ullam eum ipsam sunt nostrum vero.</p>







<h2> Contáctanos</h2>
<br>
<form>
  <fieldset disabled>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Tu nombre</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Email</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

<hr>
@switch($name)
    @case(1)
        Bienvenido Administrador
    @break
    @case(2)
        Bienvenido Empleado
    @break
    @case(3)
        Bienvenido Gerente
    @break
    @default
        Bienvenido Invitado
    @endswitch
@endsection()