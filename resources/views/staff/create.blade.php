@extends('layout_admin')

@section('container')
  <h2>Alta Persona</h2>
  @include('partial/errors')

<form method="POST" action="{{ url('admin/staff') }}" enctype="multipart/form-data">
  {!! csrf_field() !!}

  <div class="row uniform">
    <div class="6u 12u(xsmall)">
      <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre" />
    </div>
    <div class="6u 12u(xsmall)">
      <input type="text" name="apellido" id="apellido" value="" placeholder="Apellido" />
    </div>
  </div>
  <div class="row uniform">
    <div class="12u">
      <input type="email" name="email" id="email" value="" placeholder="Email" />
    </div>
  </div>
  <div class="row uniform">
    <div class="6u 12u(xsmall)">
      <input type="text" name="facebook" id="facebook" value="" placeholder="Facebook" />
    </div>
    <div class="6u 12u(xsmall)">
      <input type="text" name="linkedin" id="linkedin" value="" placeholder="Linkedin" />
    </div>
  </div>
  <div class="row uniform">
    <div class="6u 12u(xsmall)">
      <input type="file" name="foto" id="foto" value="" />
    </div>

  </div>

  <div class="row uniform">
    <div class="12u">
      <ul class="actions">
        <li><input type="submit" value="Crear" class="special"/></li>
      </ul>
    </div>
  </div>
</form>
@endsection
