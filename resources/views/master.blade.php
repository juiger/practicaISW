<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.js') !!}
    <title>@yield('titulo')- Sistema de Venta -</title>
    <h1 class="text-center">@yield('titulo')</h1>
</head>
<body>
<div class="container">
    @yield('contenido')
</div>
</body>
</html>