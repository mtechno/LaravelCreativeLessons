<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('posts.show', compact('post'));
    }

}
