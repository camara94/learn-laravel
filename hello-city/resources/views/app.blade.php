<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello city</title>
</head>

<body>

    @yield( 'content' )

    <footer>
        &copy; copright &middot; {{ date('Y') }} <a href="/apropos-moi">Apropos de moi</a>
    </footer>
</body>

</html>