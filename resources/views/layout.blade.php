<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','tictactoe')</title>
    
</head>
<body>
    @include('partials/top')
    @yield('content')
</body>
</html>