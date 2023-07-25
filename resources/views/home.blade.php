@extends('layouts.app') {{-- estendiamo il layout di app prendendo la porzione di html della home e riprendendola tramite section in app --}}

{{-- inseriamo tutto all'interno della section con il nome inserito nello @yield --}}
@section('content')    
        <div class="jumbotron"></div>
        <div class="container-fluid bg-dark py-5 ">
            <div class="row justify-content-center">
                <div class="col-10 d-flex flex-wrap">
                    <!-- inseriamo un ciclo foreach ciclando l'array associativo contenuto del file comics.php -->
                    @foreach($DcCards as $id => $comic )
                        <!-- cicliamo le card  -->
                        
                        <div class="dc-card">
                            
                            <a href="{{route('DcCards.comic', $id)}}">
                                <div class="content-img-card">
                                    <img src="{{$comic['thumb']}}" alt="">" 
                                </div>
                            
                                <p class="text-light">{{$comic['series']}}</p>
                            </a>
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
        
@endsection   

{{-- inseriamo una section che conterra il secondo menu e verra esteso in layouts --}}
@section('SecondMenu')

<div class="container-fluid bg-primary py-5">

    <div class="row justify-content-center">
        <div class="col-10">
            <ul class="d-flex">
                <li class="pe-5 text-light list-type">
                    <img class='img-menu' src="{{Vite::asset('./resources/images/buy-comics-digital-comics.png')}}" alt="">
                    DIGITAL COMICS
                </li>
                <li class="pe-5 text-light list-type">
                    <img class='img-menu' src="{{Vite::asset('./resources/images/buy-comics-merchandise.png')}}" alt="">
                    DC MERCHANDISE
                </li>
                <li class="pe-5 text-light list-type">
                    <img class='img-menu' src="{{Vite::asset('./resources/images/buy-comics-shop-locator.png')}}" alt="">
                    SUBSCRIPTION

                </li>
                <li class="pe-5 text-light list-type">
                    <img class='img-menu' src="{{Vite::asset('./resources/images/buy-comics-subscriptions.png')}}" alt="">
                    COMIC SHOP LOCATOR
                </li>
                <li class="pe-5 text-light list-type">
                    <img class='img-menu' src="{{Vite::asset('./resources/images/buy-dc-power-visa.svg')}}" alt="">
                    DC POWER VISA
                </li>
            </ul>

        </div>

    </div>
</div>    
@endsection


