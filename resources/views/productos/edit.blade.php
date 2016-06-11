@extends('master')
@section('titulo')
    Editar Producto: {{$producto->nombre}}
@endsection
@section('contenido')
{!! Form::model($producto, array('route' => array('productos.update', $producto->id),'method'=>'PUT','class'=>'form-horizontal')) !!}
<div class="form-group row">
    {!! Form::label('nombre', 'Nombre', ['class'=>'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('nombre',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('precio', 'Precio',['class'=>'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('precio',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('unidad', 'Unidad',['class'=>'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('unidad',null,['class'=>'form-control']) !!}
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