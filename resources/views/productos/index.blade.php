@extends('master')
@section('titulo')
    Productos
@endsection
@section('contenido')
<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th class="col-md-6">Nombre</th>
            <th class="col-md-5">Tipo</th>
            <th class="col-md-1">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->tipo }}</td>
            <td>
                <table>
                    <tr>
                        <td>
                            <button class="btn-xs btn-success" onclick="location.href='{{route('productos.show',[$producto->id])}}'">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </td>
                        <td>
                            <button class="btn-xs btn-primary" onclick="location.href='{{route('productos.edit',[$producto->id])}}'">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                        </td>
                        <td>
                            {!! Form::model($producto, array('route' => array('productos.destroy', $producto->id),'method'=>'DELETE')) !!}
                            <button type="submit" class="btn-xs btn-danger" onClick="return confirm('Está Seguro?')">
                                <span class="glyphicon glyphicon-trash" aria-label="Eliminar"></span>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    <tbody>
    @endforeach
</table>
@endsection