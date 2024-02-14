<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield("titulo")</title>
</head>
<body>
<h1>Mi proyecto web</h1>
<a href="about">About</a>
<a href="contacta">Contacta</a>
<a href="principal">Principal</a>
<a href="proyectos">Proyectos</a>
<div>
@yield("contenido")
</div>
</body>
</html>
