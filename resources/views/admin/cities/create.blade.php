@extends('admin.backend.layout')
@section('container')
<div class="card">
  <div class="car-header">
    <h3 class="card-title">Nueva Ciudad</h3>
  </div>
  <div class="card-body">
    <form class="" action="index.html" method="post">
      <div class="form-group">
        <label for="name" class="control-label">Nombre  <span class="text-danger">*</span></label>
        <input type="text" name="name" id="name" value="" class="form-control" placeholder="Introduzca un Nombre de Ciudad" required>
      </div>
      <div class="row">
      <div class="col-md-6">
        <label for="code" class="control-label">Nombre  <span class="text-danger">*</span></label>
        <input type="text" name="code" id="code" value="" class="form-control" placeholder="Codigo del Pais" required>
      </div>
      <div class="col-md-6">
        <label for="countries" class="control-label">Codigo Pais  <span class="text-danger">*</span></label>

        <select name="countries" id="countries"  class="form-control" placeholder="Seleccione Pais" required>
        <option>Seleccione Pais</option>
      </select>
     </div>
        </div>
      <div class="row">
        <div class="col-md-6">
          <label for="hastag" class="control-lavel">Hashtag <span class="text-danger">*</span> </label>
          <input type="text" name="hastag" id="hastag" value="" class="form-control" placeholder="Introduzca un Hashtag" required>
        </div>
        <div class="col-md-6">

          <label for="published" class="control-label">Publicado</label>
          <div >
            <input type="radio" name="published" id="publishedTrue" value="1">
            <label for="publishedTrue">Si</label>

            <input type="radio" name="published" id="publishedFalse" value="0">
            <label for="publishedFalse">No</label>
          </div>
        </div>
    </form>
  </div>
  <div class="card-footer">

    <button id="btnSave" class="btn btn-success">
      <i class="fa fa-save"></i>Guardar
    </button>
    <a href="{{route('admin.cities.index')}}" class="btn btn-danger">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>
</div>
@stop
