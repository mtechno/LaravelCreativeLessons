<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('main');
//        dump($posts);
//        foreach($posts as $post)
//        {
//            dump($post->image);
//        }
//        $post = Post::where('likes', 100)->first();
//        dump($post);
////       $post = Post::where('is_published', 0)->first();
////       dump($post->title);
//       dd('end');

    }


}
