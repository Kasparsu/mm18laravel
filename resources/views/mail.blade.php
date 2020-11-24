@extends('layout')

@section('title', 'New Post')

@section('content')
    <div class="container mb-5">
        <form method="post" action="/mail" enctype="multipart/form-data">
            @csrf
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" placeholder="Title" id="title" name="title" class="form-control">
            </div>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" id="email" name="email" class="form-control">
            </div>
            @error('body')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="body">Content</label>
                <textarea rows="10" class="form-control" id="body" name="body" placeholder="Some body ..."></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Send">
        </form>
    </div>
@endsection


