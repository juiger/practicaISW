{!! Form::open(array('route' => 'boletas.store')) !!}
<div>
    {!! Form::label('cajero', 'Cajero') !!}
    {!! Form::text('cajero') !!}
</div>
<div>
    {!! Form::submit('Guardar') !!}
</div>
{!! Form::close() !!}