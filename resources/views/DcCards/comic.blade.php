{{-- inseriamo il nuovo file blade che estenderà il layouts --}}
@extends('layouts.app')

{{-- riprendiamo lo @yield contenente la section content aggiun gendoci il nuovo contenuto tramite la nuova rotta --}}
@section('content')
    <div class="container">
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