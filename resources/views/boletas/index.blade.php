<h1>Boletas</h1>
<table>
    <tr>
        <th>Folio</th>
        <th>Cajero</th>
        <th>Total</th>
    </tr>
    @foreach($boletas as $boleta)
        <tr>
            <td>{{ $boleta->id }}</td>
            <td>{{ $boleta->cajero }}</td>
            <td>{{ $boleta->total or 'ERROR' }}</td>
        </tr>
    @endforeach
</table>