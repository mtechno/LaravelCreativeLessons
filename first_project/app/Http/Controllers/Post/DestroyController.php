<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

}
