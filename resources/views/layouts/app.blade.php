<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Trains</title>
    <!-- Includiamo gli assets con la direttiva vite-->
    @vite('resources/js/app.js')
</head>

<body>
    @include('shared.header')
    @yield('main')
    @include('shared.footer')

</body>

</html>
