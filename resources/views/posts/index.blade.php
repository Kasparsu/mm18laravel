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
                            <a href="{{route('posts.show', ['post'=> $post->id])}}" class="btn btn-info">View</a>
                            <a href="{{route('posts.edit', ['post'=> $post->id])}}" class="btn btn-warning">Edit</a>
                            <form method="POST" action="{{route('posts.destroy', ['post'=> $post->id])}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
           </tbody>
       </table>
        {{$posts->links()}}
    </div>
@endsection


