<h1>Boleta n° {{$boleta->id}}</h1>
<p>Cajero: {{$boleta->cajero}}</p>
<ul>
    @foreach($boleta->productos as $producto)
    <li>{{$producto->nombre.', '.$producto->pivot->cantidad.', '.$producto->precio}}</li>
    @endforeach
</ul>