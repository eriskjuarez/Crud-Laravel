@extends ('admin.backend.layout')
@section('container')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Modificar Etiqueta</h3>
  </div>
  <div class="card-body">
    <form class="" action="{{route('admin.tags.update',[$tag->id])}}" method="post" name="formTag" id="formTag">

      <div class="form-group">
        <label for="name" class="control-label">Nombre  <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" value="{{ $tag->name }}" class="form-control" placeholder="Introduzca una Etiqueta" required>
      </div >
      <div class="row">
        <div class="col-md-6">
          <label for="published" class="control-label">Publicado</label>
          <div >
            <input type="radio" name="published" id="publishedTrue" value="1" <?= $tag->published == 1 ? 'checked':'';?>>
            <label for="publishedTrue">Si</label>

            <input type="radio" name="published" id="publishedFalse" value="0" <?= $tag->published ==0 ? 'checked':'';?>>
            <label for="publishedFalse">No</label>
          </div>
        </div>
      </div>
    </div>
    {{method_field('PUT')}}
    {{ csrf_field() }} <!-- es un token para autentificar  cada formulario-->

  </form>
</div>
<div class="card-footer">
  <button id="btnSave" class="btn btn-success">
    <i class="fa fa-save"></i> Guardar
  </button>
  <a href="{{route('admin.tags.index')}}" class="btn btn-danger" id="btnCancel">
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

    $('#formTag').submit();
  });
});
</script>
@stop
