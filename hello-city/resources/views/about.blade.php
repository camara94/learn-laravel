<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apropos</title>
</head>

<body>
    <h1>Hello from Tunis</h1>
    <p> Construit par &hearts; Stardev Cloud Group </p>
    <p>Il est actuellement {{ date('h:i:s') }} </p>
    <footer>
        &copy; copright &middot; {{ date('Y') }} <a href="/">Accueil</a>
    </footer>
</body>

</html>