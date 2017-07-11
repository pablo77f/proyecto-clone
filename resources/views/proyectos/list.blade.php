@extends('layout_admin')

@section('container')
  <h2>Proyecto</h2>
  <p>
    <a href="{{ url('admin/proyecto/alta') }}">Nuevo proyecto</a>
  </p>
  <table class="table-wrapper">
    <theader>
      <tr><th>Nompre </th><th>Apellido</th><th>Acciones</th></tr>
    </theader>
    @foreach($proyectos as $proyecto)
      <tr data-id="{{$proyecto->id}}">
        <td>{{$proyecto->nombre}}</td>
        <td>{{str_limit($proyecto->descripcion,50,'...')}}</td>
        <td>
          <a href='{{ url('admin/proyecto') }}/{{$proyecto->id}}' title="Editar"><i class="fa fa-edit"></i></a>
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
        </td>

      </tr>
    @endforeach
  </table>
  {!! $proyectos->render() !!}
  {!! Form::open(['url' => ['admin/proyecto', ':PROYECTO_ID'], 'method' => 'DELETE', 'id' => 'frm_delete' ]) !!}
  {!! Form::close() !!}
@endsection

@section('scripts')
<script>
  $('.btn-delete').click(function() {
    var row = $(this).parents('tr');
    var id = $(row).data('id');
    var form = $('#frm_delete');
    var action = decodeURIComponent($(form).attr('action'));
    var url = action.replace(':PROYECTO_ID',id);
    var data = form.serialize();
    $.post(url, data, function(result) {
      console.log(result.msg);
      row.fadeOut();
    }).fail(function() {
      alert('No se pudo eliminar');
    });
  });
</script>
@endsection
