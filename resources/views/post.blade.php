@extends('layout')

@section('title', $post->title)

@section('content')
    <div class="container mb-5">
        <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
        <h1>{{$post->title}}</h1>
        <p>{!! $post->displayBody !!}</p>
    </div>
@endsection

