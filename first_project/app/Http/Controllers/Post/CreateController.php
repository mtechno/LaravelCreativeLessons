<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('posts.create');
    }

}
