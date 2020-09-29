@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row row-cols-3">

            @for($i=0;$i<24;$i++)
                @if($i%2==0)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Card title {{$i}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endfor
        </div>
    </div>

@endsection
