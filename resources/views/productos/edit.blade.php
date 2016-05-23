{!! Form::model($producto, array('route' => array('productos.update', $producto->id),'method'=>'PUT')) !!}
<div>
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre') !!}
</div>
<div>
    {!! Form::label('precio', 'Precio') !!}
    {!! Form::text('precio') !!}
</div>
<div>
    {!! Form::label('tipo', 'Tipo') !!}
    {!! Form::text('tipo') !!}
</div>
<div>
    {!! Form::label('unidad', 'Unidad') !!}
    {!! Form::text('unidad') !!}
</div>
<div>
    {!! Form::submit('Guardar') !!}
</div>
{!! Form::close() !!}