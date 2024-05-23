<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

}
