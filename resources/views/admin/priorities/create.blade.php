@extends ('admin.backend.layout')
@section('container')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Nueva Prioridades</h3>
  </div>
  <div class="card-body">
    <form class="" action="{{route('admin.priorities.store')}}" method="post" name="formPriority" id="formPriority">

      <div class="form-group">
        <label for="name" class="control-label">Nombre  <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" value="" class="form-control" placeholder="Introduzca un Nombres" required>
      </div >
<div class="row">
  <div class="col-md-4">
    <label for="level" class="control-lavel">Nivel <span class="text-fanger">*</span> </label>
    <input type="int" name="level" id="level" value="" class="form-control" placeholder="Introduzca un Hashtag" required>
  </div>
  <div class="col-md-4">
    <label for="color" class="control-lavel">Color <span class="text-fanger">*</span> </label>
    <input type="text" name="color" id="color" value="" class="form-control" placeholder="Introduzca un Hashtag" required>
  </div>
  <div class="col-md-4">

    <label for="published" class="control-label">Publicado</label>
    <div >
      <input type="radio" name="published" id="publishedTrue" value="1" checked>
      <label for="publishedTrue">Si</label>

      <input type="radio" name="published" id="publishedFalse" value="0">
      <label for="publishedFalse">No</label>
    </div>
  </div>
</div>
      </div>
      {{ csrf_field() }} <!-- es un token para autentificar  cada formulario-->
    </form>
  </div>
  <div class="card-footer">
    <button id="btnSave" class="btn btn-success">
      <i class="fa fa-save"></i> Guardar
    </button>
    <a href="{{route('admin.priorities.index')}}" class="btn btn-danger" id="btnCancel">
      <i class="fa fa-arrow-left"></i>volver
    </a>
  </div>
</div>
@stop


@section('scripts')
<script type="text/javascript">
$(document).ready(function()
{
  $('#btnSave').click(function()
  {
  //  alert('ser presiono guardar');
  //  $('#btnCancel').text('Retornar');
  //  $('#btnCancel').attr('href',"#");
  //  $('#btnCancel').attr('title',"volver");
  //  alert($('#btnSave').text());
  $('#formPriority').submit();
  });
});
</script>
@stop
