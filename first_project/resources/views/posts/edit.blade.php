@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('posts.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <textarea type="text" name="content" class="form-control" id="content" aria-describedby="content">{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" name="image" class="form-control" id="image" aria-describedby="image" value="{{$post->image}}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

            <div>
                <a href="{{route('posts.index')}}">Back</a>
            </div>
        </form>
    </div>
@endsection
