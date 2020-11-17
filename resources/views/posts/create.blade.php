@extends('layout')

@section('title', 'New Post')

@section('content')
    <div class="container mb-5">
       <form method="post" action="/posts" enctype="multipart/form-data">
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
                <textarea rows="10" class="form-control" id="body" name="body" placeholder="Some body ..."></textarea>
            </div>
           @error('title')
           <div class="alert alert-danger">{{$message}}</div>
           @enderror
           <div class="form-group">
               <label for="image">Image</label>
               <input type="file" accept="image/*" placeholder="Title" id="image" name="image" class="form-control-file">
           </div>
            <input class="btn btn-primary" type="submit" value="Create">
       </form>
    </div>
@endsection


