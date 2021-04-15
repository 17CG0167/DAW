@extends('admin.layouts.main')

@section('contenido')
    <form action="/admin/productos" method="POST">
    @csrf
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </form>

@endsection