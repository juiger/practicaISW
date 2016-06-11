<!DOCTYPE html>
<html>
<header>
{!! Html::style('css/bootstrap.css') !!}
{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
    @section('header')
</header>
<body>
<div class="container">
@yield('contenido')
</div>
</body>
</html>