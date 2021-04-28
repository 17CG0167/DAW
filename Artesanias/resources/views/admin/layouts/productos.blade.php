@extends('admin.layouts.main')

@section('contenido')
  <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">INICIO</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
              <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modal-add">
              <i class="fa fa-plus"></i>Agregar producto</button>
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
          @if($message= Session::get('Listo'))
                <div class="alert alert-success alert-dismissable fade show col-12" role="alert">
                    <h5>Listo: </h5>
                    <p>Se ha insertado correctamente</p>
                </div>
            @endif
          </div>
        </div>
      </div>

    <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar Producto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="/admin/productos" method="POST" enctype="multipart/form-data">    

          

            @csrf    
            <div class="modal-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control form-control-border" id="nombre" name="nombre" value="{{ @old('nombre') }}">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control form-control-border" id="precio" name="precio" value="{{ @old('precio') }}">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" class="form-control form-control-border" id="stock"name="stock" value="{{ @old('stock') }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control form-control-border" id="descripcion"name="descripcion" value="{{ @old('descripcion') }}">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" class="form-control form-control-border" id="imagen"name="imagen" value="{{ @old('imagen') }}">
            </div>
         
         
         
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between" >
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>

        </form>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            @if($message=Session::get('error'))
                $("#modal-add").modal('show')
            @endif
        });
    </script>

@endsection

