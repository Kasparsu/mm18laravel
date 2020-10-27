@extends('layout')

@section('title', 'New Post')

@section('content')
    <div class="container mb-5">
       <form method="post" action="/posts">
           @csrf
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" placeholder="Title" id="title" name="title" class="form-control">
            </div>
           @error('body')
           <div class="alert alert-danger">{{$message}}</div>
           @enderror
            <div class="form-group">
                <label for="body">Content</label>
                <textarea class="form-control" id="body" name="body" placeholder="Some body ..."></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Create">
       </form>
    </div>
@endsection


