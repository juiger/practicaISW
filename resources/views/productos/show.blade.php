<h1>Producto</h1>
<h3>Nombre</h3>
<h4>{{$producto->nombre}}</h4>
<h3>Precio</h3>
<h4>{{$producto->precio}}</h4>
<h3>Tipo</h3>
<h4>{{$producto->tipo}}</h4>
<h3>Unidad de venta</h3>
<h4>{{$producto->unidad}}</h4>

{!! Form::model($producto, array('route' => array('productos.destroy', $producto->id),'method'=>'DELETE')) !!}
{!! Form::submit('Eliminar') !!}
{!! Form::close() !!}