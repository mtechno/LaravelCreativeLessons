<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = \request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',

        ]);
        Post::create($data);
        return redirect()->route('posts.index');
    }

}
