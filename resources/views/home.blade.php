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
        <div class="jumbotron"></div>
        <div class="container-fluid bg-dark py-5">
            <div class="row justify-content-center">
                <div class="col-10">
                    <!-- inseriamo un ciclo foreach ciclando l'array associativo contenuto del file comics.php -->
                    @foreach($DcCards as $comic )
                        <!-- cicliamo le card  -->
                        <div class="dc-card">
                            <p class="text-primary">{{$comic['series']}}</p>

                        </div>
                    @endforeach
                </div>
                

            </div>
        </div>
    </main>
</body>

</html>
