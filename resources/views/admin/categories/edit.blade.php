@extends ('admin.backend.layout')
@section('container')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Modificar Categoria</h3>
  </div>
  <div class="card-body">
    <form class="" action="{{route('admin.categories.update',[$category->id])}}" method="post" name="formCategory" id="formCategory">

      <div class="form-group">
        <label for="name" class="control-label">Nombre  <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" class="form-control" placeholder="Introduzca un Nombres" required>
      </div >
      <div class="row">
        <div class="col-md-6">
          <label for="hashtag" class="control-lavel">Hashtag <span class="text-fanger">*</span> </label>
          <input type="text" name="hashtag" id="hashtag" value="{{ $category->hashtag}}" class="form-control" placeholder="Introduzca un Hashtag" required>
        </div>
        <div class="col-md-6">

          <label for="published" class="control-label">Publicado</label>
          <div >
            <input type="radio" name="published" id="publishedTrue" value="1" <?= $category->published == 1 ? 'checked':'';?>>
            <label for="publishedTrue">Si</label>

            <input type="radio" name="published" id="publishedFalse" value="0" <?= $category->published ==0 ? 'checked':'';?>>
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
  <a href="{{route('admin.categories.index')}}" class="btn btn-danger" id="btnCancel">
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

    $('#formCategory').submit();
  });
});
</script>
@stop
