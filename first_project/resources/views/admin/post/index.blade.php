@extends('layouts.main')
@section('content')
    <div>
        <div>


            <div>
                <a href="{{route('posts.create')}}" class="btn btn-primary">Add one post</a>
            </div>
            @foreach($posts as $post)
                <div><a href="{{route('posts.show', $post->id)}}"> {{$post->id}}. {{$post->title}}</a></div>
            @endforeach
        </div>
    </div>
@endsection
