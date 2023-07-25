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
        <div class="container-fluid bg-dark py-5 ">
            <div class="row justify-content-center">
                <div class="col-10 d-flex flex-wrap">
                    <!-- inseriamo un ciclo foreach ciclando l'array associativo contenuto del file comics.php -->
                    @foreach($DcCards as $comic )
                        <!-- cicliamo le card  -->
                        <div class="dc-card">
                            <div class="content-img-card">
                                <img src="{{$comic['thumb']}}" alt="">" 
                            </div>
                            
                            <p class="text-light">{{$comic['series']}}</p>

                        </div>
                    @endforeach
                </div>
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="button" class="btn px-5 btn-primary">LOAD MORE</button>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        
    </div>
        
    </main>
</body>

</html>
