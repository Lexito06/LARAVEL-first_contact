<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Error')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
{{--
Se usa @yield cuando solo usaremos una directiva
Y usaremos @stack cuando podamos poner mas de una
--}}
    @stack('css')

</head>

<body>

    <header></header>


    @yield('content')


    <footer></footer>

</body>

</html>

<!--
    Este es el layout principal de la aplicación, donde se define la estructura básica de la página.
    Se utiliza para envolver el contenido de las vistas y proporcionar una apariencia consistente en toda la aplicación.
    En este caso, se utiliza un diseño simple con un encabezado y un pie de página.
-->