@extends('master')
@section('titulo')
    Crear Boleta
@endsection
@section('contenido')
    {!! Form::open(array('route' => 'boletas.store', 'class'=>'form-horizontal')) !!}
    <div class="row form-group">
        {!! Form::label('cajero', 'Cajero',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-9">
            {!! Form::text('cajero',null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('rut', 'Rut',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-9">
            {!! Form::text('rut',null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-offset-3 col-md-3 ">
            {!! Form::submit('Guardar',['class'=>'form-control btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection