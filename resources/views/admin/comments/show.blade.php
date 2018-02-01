@extends ('admin.backend.layout')
@section('container')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detalle Comentario</h3>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-3">
        <label class="control-label">Descripcion</label>
      </div>
      <div class="col-md-9">
        <label class="badge badge-primary">{{$comment->description}}</label>
      </div>

    </div>

    <div class="row">
      <div class="col-md-3">
        <label class="control-label">Publicado</label>
      </div>
      <div class="col-md-9">
        @if($comment->published == 1)
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
    <a href="{{route('admin.comments.index')}}" class="btn btn-danger" id="btnCancel">
      <i class="fa fa-arrow-left"></i>Volver
    </a>
  </div>
</div>
@stop
