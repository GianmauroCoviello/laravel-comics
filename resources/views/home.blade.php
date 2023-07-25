@extends('layouts.app') {{-- estendiamo il layout di app prendendo la porzione di html della home e riprendendola tramite section in app --}}

{{-- inseriamo tutto all'interno della section con il nome inserito nello @yield --}}
@section('content')    
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
        
@endsection       
