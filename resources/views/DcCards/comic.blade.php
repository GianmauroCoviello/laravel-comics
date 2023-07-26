{{-- inseriamo il nuovo file blade che estenderà il layouts --}}
@extends('layouts.app')

{{-- riprendiamo lo @yield contenente la section content aggiun gendoci il nuovo contenuto tramite la nuova rotta --}}
@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-6">
                <h1>{{$comic['title']}}</h1>
                <p>{{$comic['price']}}</p>
                <h3>DESCRIPTION</h3>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="col-6">
                <h1>{{$comic['series']}}</h1>
                <img class="single-card" src="{{$comic['thumb']}}" alt="">
            </div>
        </div>
    </div>   
@endsection


@section('SecondMenu')

<div class="container-fluid bg-secondary py-5">

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


