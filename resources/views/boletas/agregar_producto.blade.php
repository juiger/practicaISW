@extends('master')
@section('titulo')
    Crear Boleta
@endsection
@section('contenido')
    {!! Form::open(array('route' => ['boletas.agregar_producto',$boleta->id], 'class'=>'form-horizontal')) !!}
    <div class="form-group row">
        {!! Form::label('producto_id', 'Nombre',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-9">
            {!! Form::select('producto_id', App\Producto::lists('nombre','id'),null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('cantidad', 'Cantidad',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-9">
            {!! Form::number('cantidad',null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="row col-md-offset-3 col-md-3">
            {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection