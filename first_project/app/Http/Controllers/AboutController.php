<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('about');
//        dump($posts);
//        foreach($posts as $posts)
//        {
//            dump($posts->image);
//        }
//        $posts = Post::where('likes', 100)->first();
//        dump($posts);
////       $posts = Post::where('is_published', 0)->first();
////       dump($posts->title);
//       dd('end');

    }


}
