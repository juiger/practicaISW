@extends('master')
@section('titulo')
    Crear Producto
@endsection
@section('contenido')
    {!! Form::open(array('route' => 'productos.store','class'=>'form-horizontal')) !!}
    <div class="form-group row">
        {!! Form::label('nombre', 'Nombre', ['class'=>'control-label col-md-3']) !!}
        <div class="col-md-9">
        {!! Form::text('nombre','',['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('precio', 'Precio',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-9">
        {!! Form::text('precio','',['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('unidad', 'Unidad',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-9">
        {!! Form::text('unidad','',['class'=>'form-control']) !!}
        </div>

    </div>
    <div class="form-group">
        {!! Form::label('tipo_producto_id','Tipo de Producto',['class'=>'control-label col-md-3']) !!}
        <div class="col-md-9">
        {!! Form::select('tipo_producto_id',App\TipoProducto::pluck('nombre','id'),null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3 col-sm-offset-3">
        {!! Form::submit('Guardar',['class'=>'form-control btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
@endsection