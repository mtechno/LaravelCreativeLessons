<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('posts.create');
    }

}