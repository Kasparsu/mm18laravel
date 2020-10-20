@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container mb-5">
        {{$posts->links()}}
        <div class="row row-cols-3">
            @foreach($posts as $post)
                    <div class="col mt-5">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/{{$post->id}}" class="card-link">Read more</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
        {{$posts->links()}}
    </div>

@endsection
