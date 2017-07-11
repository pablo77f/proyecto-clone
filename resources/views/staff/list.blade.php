@extends('layout_admin')

@section('container')

  <h2>Staff</h2>
  <p>
    <a href="{{ url('admin/staff/alta') }}">Crear persona</a>
  </p>
  <table class="table-wrapper">
    <theader>
      <tr><th>Nompre </th><th>Apellido</th><th>Acciones</th></tr>
    </theader>
    @foreach($staff as $staf)
      <tr data-id="{{$staf->id}}">
        <td>{{$staf->nombre}}</td>
        <td>{{$staf->apellido}}</td>
        <td>
          <a href='{{ url('admin/staff') }}/{{$staf->id}}' title="Editar"><i class="fa fa-edit"></i></a>
          <a href='#' title="Eliminar" class="btn-delete"><i class="fa fa-times"></i></a>
        </td>

      </tr>
    @endforeach
  </table>
  {!! $staff->render() !!}
  {!! Form::open(['url' => ['admin/staff', ':STAFF_ID'], 'method' => 'DELETE', 'id' => 'frm_delete' ]) !!}
  {!! Form::close() !!}
@endsection

@section('scripts')
<script>
  $('.btn-delete').click(function() {
    var row = $(this).parents('tr');
    var id = $(row).data('id');
    var form = $('#frm_delete');
    var action = decodeURIComponent($(form).attr('action'));
    var url = action.replace(':STAFF_ID',id);
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
