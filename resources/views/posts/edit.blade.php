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
        <form action="{{route('posts.images', ['post' => $post->id])}}" class="dropzone" id="my-awesome-dropzone">
            @csrf
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js" integrity="sha512-8l10HpXwk93V4i9Sm38Y1F3H4KJlarwdLndY9S5v+hSAODWMx3QcAVECA23NTMKPtDOi53VFfhIuSsBjjfNGnA==" crossorigin="anonymous"></script>
@endpush

