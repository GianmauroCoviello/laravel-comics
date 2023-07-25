<!-- incollata la struttura html della homepage  -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics - Homepage</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <!-- includiamo l'header all'interno della home -->
    @include('partials.header')
    <main>
        <!-- inseriamo il segnaposto all'interno del main -->
        @yield('content')  
    </main>
</body>

</html>
