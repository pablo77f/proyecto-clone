@extends('layout_admin')

@section('container')
  <h2>Alta Persona</h2>
  @include('partial/errors')

<form method="POST" action="{{ url('admin/staff') }}/{{$persona->id}}" enctype="multipart/form-data">
  {!! csrf_field() !!}

  <div class="row uniform">
    <div class="6u 12u(xsmall)">
      <input type="text" name="nombre" id="nombre" value="{{$persona->nombre}}" placeholder="Nombre" />
    </div>
    <div class="6u 12u(xsmall)">
      <input type="text" name="apellido" id="apellido" value="{{$persona->apellido}}" placeholder="Apellido" />
    </div>
  </div>
  <div class="row uniform">
    <div class="12u">
      <input type="email" name="email" id="email" value="{{$persona->email}}" placeholder="Email" />
    </div>
  </div>
  <div class="row uniform">
    <div class="6u 12u(xsmall)">
      <input type="text" name="facebook" id="facebook" value="{{$persona->facebook}}" placeholder="Facebook" />
    </div>
    <div class="6u 12u(xsmall)">
      <input type="text" name="linkedin" id="linkedin" value="{{$persona->linkedin}}" placeholder="Linkedin" />
    </div>
  </div>
  <div class="row uniform">
    <div class="12u 12u(xsmall)">
      <textarea name="curriculum" id="curriculum" >{{$persona->curriculum}}
      </textarea>
    </div>
  </div>
  <div class="row uniform">
    <div class="6u 12u(xsmall)">
      <input type="file" name="foto" id="foto"/>
    </div>
    <div class="6u 12u(xsmall)">
      <img src="{{ url('/') }}{{ $persona->foto }}" width="100%">
    </div>

  </div>

  <div class="row uniform">
    <div class="12u">
      <ul class="actions">
        <li><input type="submit" value="Guardar" class="special"/></li>
      </ul>
    </div>
  </div>
</form>
@endsection
