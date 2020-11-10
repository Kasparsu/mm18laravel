@extends('layout')

@section('title', $post->title)

@section('content')
    <div class="container mb-5">
        <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{$post->title}}</h1>
                <p>{!! $post->displayBody !!}</p>
                <footer class="blockquote-footer">{{$post->user->name}}</footer>
            </div>

        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <form action="{{route('comments.store', ['post'=> $post->id])}}" method="POST">
                    @csrf
                    @error('body')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <textarea class="input-group" rows="5" name="body" placeholder="Write some comment here..."></textarea>
                    <input type="submit" value="Comment">
                </form>
            </li>
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    {{$comment->body}}
                    <footer class="blockquote-footer">{{$comment->user->name}}</footer>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

