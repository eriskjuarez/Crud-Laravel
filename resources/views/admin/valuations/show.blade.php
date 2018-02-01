@extends ('admin.backend.layout')
@section('container')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detalle Valoracion</h3>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-3">
        <label class="control-label">Nombres</label>
      </div>
      <div class="col-md-9">
        <label class="badge badge-primary">{{$valuation->name}}</label>
      </div>

    </div>


    <div class="row">
      <div class="col-md-3">
        <label class="control-label">posicion</label>
      </div>
      <div class="col-md-9">
        <label class="badge badge-primary">{{$valuation->position}}</label>
      </div>

    </div>


    <div class="row">
      <div class="col-md-3">
        <label class="control-label">Publicado</label>
      </div>
      <div class="col-md-9">
        @if($valuation->published == 1)
        <label class="badge badge-success">
          <i class="fa fa-check"></i>
        </label>
        @else
        <label class="badge badge-danger">
          <i class="fa fa-remove"></i>
        </label>
        @endif
      </div>

    </div>
  </div>
  <div class="card-footer">
    <a href="{{route('admin.valuations.index')}}" class="btn btn-danger" id="btnCancel">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>
</div>
@stop
