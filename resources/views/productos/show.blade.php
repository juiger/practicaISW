@extends('master')
@section('titulo')
    Producto
@endsection
@section('contenido')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Detalles</h4>
        </div>
        <div class="panel-body">
            <table style="white-space: pre">
                <tbody>
                <tr><th class="text-right">Nombre: </th><td class="text-info">{{$producto->nombre}}</td></tr>
                <tr><th class="text-right">Precio: </th><td class="text-info">{{$producto->precio}}</td></tr>
                <tr><th class="text-right">Tipo: </th><td class="text-info">{{$producto->tipo}}</td></tr>
                <tr><th class="text-right">Medida: </th><td class="text-info">{{$producto->unidad}}</td></tr>
            </table>
        </div>
        <div class="panel-footer">
            <table>
                <tbody>
                <tr class="row">
                    <td class="col-md-1">
                        {!! Form::model($producto, array('route' => array('productos.destroy', $producto->id),'method'=>'DELETE')) !!}
                        {!! Form::submit('Eliminar',['class'=>'btn btn-danger','onClick'=>'return confirm(\'Está Seguro?\')']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td class="col-md-1">
                        <a href="{{route('productos.show',[$producto->id])}}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection