<!DOCTYPE html>
<html lang="es_Es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beto | @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <h1>Nav</h1>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer>
    <h2>Footer</h2>
</footer>
</body>
</html>
