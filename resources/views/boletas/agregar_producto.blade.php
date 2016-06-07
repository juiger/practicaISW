{!! Form::open(array('route' => ['boletas.agregar_producto',$boleta->id])) !!}
<div>
    {!! Form::label('producto_id', 'Nombre') !!}
    {!! Form::select('producto_id', App\Producto::lists('nombre','id')) !!}
</div>
<div>
    {!! Form::label('cantidad', 'Cantidad') !!}
    {!! Form::number('cantidad') !!}
</div>
{!! Form::submit('Enviar') !!}
{!! Form::close() !!}