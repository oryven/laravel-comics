<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('componentes.header')

    @include('componentes.jumbo')

    @include('componentes.main')

    {{-- @yield('component')

    @yield('component-test') --}}

    @include('componentes.footer')

    @include('componentes.social')
</body>
</html>