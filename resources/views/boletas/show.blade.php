@extends('master')
@section('titulo')
    Boleta n° {{$boleta->id}}
@endsection
@section('contenido')
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Detalles</h4>
    </div>
    <div class="panel-body">
        <table style="white-space: pre">
            <tbody>
            <tr><th class="text-right">Folio: </th><td class="text-info">{{$boleta->id}}</td></tr>
            <tr><th class="text-right">Cajero: </th><td class="text-info">{{$boleta->cajero}}</td></tr>
        </table>
        <div class="panel">
            <h4>Productos:</h4>
            <table>
            @foreach($boleta->productos as $producto)
                <tr>
                    <td><a href="{{route('productos.show',[$producto->id])}}">{{$producto->nombre}}</a>{{', '.$producto->pivot->cantidad.' x $'.$producto->precio}}</td>
                    <td>= ${{$producto->pivot->cantidad*$producto->precio}}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
    <div class="panel-footer">
        <table>
            <tbody>
            <tr>
                <td>
                    {!! Form::model($boleta, array('route' => array('boletas.destroy', $boleta->id),'method'=>'DELETE')) !!}
                    {!! Form::submit('Eliminar',['class'=>'btn btn-danger','onClick'=>'return confirm(\'Está Seguro?\')']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection