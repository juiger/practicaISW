<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
    <title>@yield('titulo')- Sistema de Venta -</title>

</head>
<body>
<div>
    <!-- Menú Lateral -->
    <div class="panel panel-info col-md-2 text-center">
        <div class="panel-heading">Menú</div>
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="{{route('home')}}">Inicio</a>
                </li>
                <li role="presentation"><a href="{{route('productos.index')}}">Productos</a>
                    @if(strpos(url()->current(),'productos'))
                        <a class="bg-info" href="{{route('productos.create')}}">Crear Producto</a>
                    @endif
                </li>
                <li role="presentation"><a href="{{route('boletas.index')}}">Boletas</a>
                    @if(strpos(url()->current(),'boletas'))
                        <a class="bg-info" href="{{route('boletas.create')}}">Crear Boleta</a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <h1 class="text-center">@yield('titulo')</h1>
        @yield('contenido')
    </div>

</div>
</body>
</html>