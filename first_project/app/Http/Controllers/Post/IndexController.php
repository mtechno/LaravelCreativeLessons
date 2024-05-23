<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $category = Category::find(1);
        $post = Post::find(1);
        $tag = Tag::find(1);
        dd($tag->posts);
//        dd($category->posts);


        return view('posts.index', compact('posts'));
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
