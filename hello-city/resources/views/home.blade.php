<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello city</title>
</head>

<body>
    <h1>Hello from Tunis</h1>
    <p> {{ date('h:i:s') }} </p>
    <footer>
        &copy; copright &middot; {{ date('Y') }}
    </footer>
</body>

</html>