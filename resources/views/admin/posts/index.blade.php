@extends('admin.backend.layout')
@section('container')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="float-right">
          <a href="{{route('admin.posts.create')}}" class="btn btn-primary btn-lg">
            <i class="fa fa-plus"> </i> Crear
          </a>
        </div>
        <h3 class="card-title">Publicación</h3>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th>Nombre</th>
                <th>Pais</th>
              <th>Codigo</th>
              <th>Publicado</th>
              <th width="180px">Opciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Bolivia</td>
              <td>1</td>
              <td>1</td>
              <td>
                <a href="#" class="btn btn-success">
                  <i class="fa fa-plus"></i>

                </a>
                <a href="#" class="btn btn-warning">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                  <i class="fa fa-trash"></i>
                </a>
              </td>

            </tr>
            <tr>
              <td>2</td>
              <td>Peru</td>
              <td>2</td>
              <td>2</td>
              <td>
                <a href="#" class="btn btn-success">
                  <i class="fa fa-plus"></i>
                </a>
                <a href="#" class="btn btn-warning">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                  <i class="fa fa-trash"></i>
                </a>
              </td>

            </tr>
            <tr>
              <td>3</td>
              <td>Bolivia</td>
              <td>3</td>
              <td>3</td>

              <td>
                <a href="#" class="btn btn-success">
                  <i class="fa fa-plus"></i>
                </a>
                <a href="#" class="btn btn-warning">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                  <i class="fa fa-trash"></i>
                </a>
              </td>

            </tr>
            <tr>
              <td>4</td>
              <td>Bolivia</td>
              <td>4</td>
              <td>4</td>
              <td>
                <a href="#" class="btn btn-success">
                  <i class="fa fa-plus"></i>
                </a>
                <a href="#" class="btn btn-warning">
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="#" class="btn btn-danger">
                  <i class="fa fa-trash"></i>
                </a>
              </td>

            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>

@stop
