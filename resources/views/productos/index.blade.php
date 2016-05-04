<table>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Tipo</th>
        <th>Unidad</th>
    </tr>
    @foreach($productos as $producto)
    <tr>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->tipo }}</td>
        <td>{{ $producto->unidad }}</td>
    </tr>
    @endforeach
</table>