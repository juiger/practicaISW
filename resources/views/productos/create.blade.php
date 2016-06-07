{!! Form::open(array('route' => 'productos.store')) !!}
<div>
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre') !!}
</div>
<div>
    {!! Form::label('precio', 'Precio') !!}
    {!! Form::text('precio') !!}
</div>
<div>
    {!! Form::label('unidad', 'Unidad') !!}
    {!! Form::text('unidad') !!}
</div>
<div>
    {!! Form::label('tipo_producto_id','Tipo de Producto') !!}
    {!! Form::select('tipo_producto_id',App\TipoProducto::pluck('nombre','id')) !!}
</div>
<div>
    {!! Form::submit('Guardar') !!}
</div>
{!! Form::close() !!}