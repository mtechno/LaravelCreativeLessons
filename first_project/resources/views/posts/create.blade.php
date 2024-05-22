@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <textarea type="text" name="content" class="form-control" id="content" aria-describedby="content"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">image</label>
                <input type="text" name="image" class="form-control" id="image" aria-describedby="image">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
