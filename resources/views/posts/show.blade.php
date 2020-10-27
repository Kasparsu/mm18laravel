@extends('layout')

@section('title', $post->title)

@section('content')
    <div class="container mb-5">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td><b>Id</b></td>
                    <td>{{$post->id}}</td>
                </tr>
                <tr>
                    <td><b>Title</b></td>
                    <td>{{$post->title}}</td>
                </tr>
                <tr>
                    <td><b>Body</b></td>
                    <td>{{$post->body}}</td>
                </tr>
                <tr>
                    <td><b>Created At</b></td>
                    <td>{{$post->created_at}}</td>
                </tr>
                <tr>
                    <td><b>Updated at</b></td>
                    <td>{{$post->updated_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection



