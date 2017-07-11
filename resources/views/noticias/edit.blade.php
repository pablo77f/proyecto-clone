@extends('layout_admin')

@section('title', 'Nuevo Proyecto')

@section('container')
<h2>Editar Proyecto</h2>
@include('partial/errors')
<form method="POST" action="{{ url('admin/proyecto') }}/{{$proyecto->id}}" enctype="multipart/form-data">
  {!! csrf_field() !!}

  <div class="row uniform">
    <div class="12u">
      <input type="text" name="nombre" id="nombre" value="{{$proyecto->nombre}}" placeholder="Nombre" />
    </div>
    <div class="12u">
      <input type="text" name="descripcion" id="descripcion" value="{{$proyecto->descripcion}}" placeholder="Descripción" />
    </div>
  </div>
  <div class="row uniform">
    <div class="12u">
      <textarea name="proyecto_html" id="proyecto_html">{{$proyecto->proyecto_html}}</textarea>
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

@section('scripts')
<script>
tinymce.init({
  selector:'textarea',
  height:300
 });
</script>
@endsection
