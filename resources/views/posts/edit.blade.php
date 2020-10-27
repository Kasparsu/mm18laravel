@extends('layout')

@section('title', 'Edit ' . $post->title)

@section('content')
    <div class="container mb-5">
        <form method="POST" action="/posts/{{$post->id}}">
            @csrf
            @method('PATCH')
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="title">Title</label>
                <input
                    type="text"
                    placeholder="Title"
                    id="title"
                    name="title"
                    class="form-control"
                    value="{{$post->title}}">
            </div>
            @error('body')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="body">Content</label>
                <textarea
                    rows="10"
                    class="form-control"
                    id="body"
                    name="body"
                    placeholder="Some body ...">{{$post->body}}</textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
@endsection



