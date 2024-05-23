<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function __invoke(Post $post)
    {
        $data = \request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',

        ]);
        $post->update($data);
        return redirect()->route('posts.show', $post->id);
    }

}
