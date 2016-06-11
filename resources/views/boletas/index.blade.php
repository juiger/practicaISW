@extends('master')
@section('titulo')
    Boletas
@endsection
@section('contenido')
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th class="col-md-2">Folio</th>
                <th class="col-md-6">Cajero</th>
                <th class="col-md-3">Total</th>
                <th class="col-md-1">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($boletas as $boleta)
            <tr>
                <td>{{ $boleta->id }}</td>
                <td>{{ $boleta->cajero }}</td>
                <td>{{ $boleta->total }}</td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <button class="btn-xs btn-success" onclick="location.href='{{route('boletas.show',[$boleta->id])}}'">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </td>
                            <td>
                                {!! Form::model($boleta, array('route' => array('boletas.destroy', $boleta->id),'method'=>'DELETE')) !!}
                                <button type="submit" class="btn-xs btn-danger" onClick="return confirm('Está Seguro?')">
                                    <span class="glyphicon glyphicon-trash" aria-label="Eliminar"></span>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection