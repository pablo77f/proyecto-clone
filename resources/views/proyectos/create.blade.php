@extends('layout_admin')

@section('title', 'Nuevo Proyecto')

@section('container')
<h2>Nuevo Proyecto</h2>
@include('partial/errors')
<form method="POST" action="{{ url('admin/proyecto') }}" enctype="multipart/form-data">
  {!! csrf_field() !!}

  <div class="row uniform">
    <div class="12u">
      <input type="text" name="nombre" id="nombre" value="" placeholder="Nombre" />
    </div>
    <div class="12u">
      <input type="text" name="descripcion" id="descripcion" value="" placeholder="Descripción" />
    </div>
  </div>
  <div class="row uniform">
    <div class="12u">
      <textarea name="proyecto_html" id="proyecto_html"></textarea>
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

@section('scripts')
<script>
tinymce.init({
  selector:'textarea',
  height:300
 });
</script>
@endsection
