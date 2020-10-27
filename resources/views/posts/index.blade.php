@extends('layout')

@section('title', 'Posts')

@section('content')
    <div class="container mb-5">
        <a href="/posts/create" class="btn btn-primary">New Post</a>
        {{$posts->links()}}
       <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Action</th>
                </tr>
            </thead>
           <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td>
                            <a href="/posts/{{$post->id}}" class="btn btn-info">View</a>
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                            <a href="/posts/{{$post->id}}/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
           </tbody>
       </table>
        {{$posts->links()}}
    </div>
@endsection


