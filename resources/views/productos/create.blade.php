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