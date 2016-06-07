<h1>Boleta n° {{$boleta->id}}</h1>
<p>Cajero: {{$boleta->cajero}}</p>
<ul>
    @foreach($boleta->productos()->where('tipo_producto_id','1')->get() as $producto)
    <li>{{$producto->nombre}}, {{$producto->pivot->cantidad}}</li>
    @endforeach
</ul>