<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {

        $post = Post::find(1);
        return view('posts.index', compact('post'));


        //        $category = Category::find(1);
        //        $tag = Tag::find(1);


//        dd($tag->posts);
//        dd($category->posts);


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
