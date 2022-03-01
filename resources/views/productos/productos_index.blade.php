@extends('layouts.master')
@section('titulo')
    productos index
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Productos <i class="fa fa-box"></i></h1>
            <a href="{{url("productos.create")}}" class="btn btn-success mb-2">Agregar</a>
            @include("notificacion")
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Código de barras</th>
                        <th>Descripción</th>
                        <th>Precio de compra</th>
                        <th>Precio de venta</th>
                        <th>Utilidad</th>
                        <th>Existencia</th>

                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
