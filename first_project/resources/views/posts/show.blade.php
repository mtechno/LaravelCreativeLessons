@extends('layouts.main')
@section('content')
    <div>
        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}} {{$post->image}}</div>
    </div>
    <div>
        <a href="{{route('posts.edit', $post->id)}}">Edit</a>
    </div>
    <div>
        <form action="{{route('posts.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="Submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{route('posts.index')}}">Back</a>
    </div>
@endsection
