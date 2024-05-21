<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        dump($posts);
        foreach($posts as $post)
        {
            dump($post->image);
        }
        $post = Post::where('likes', 100)->first();
        dump($post);
//       $post = Post::where('is_published', 0)->first();
//       dump($post->title);
       dd('end');

    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post',
                'content' => 'content of post',
                'likes' => 100,
                'image' => 'image.jpg',
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post',
                'content' => 'another content of post',
                'likes' => 200,
                'image' => 'another_image.jpg',
                'is_published' => 1,
            ],
        ];
        foreach ($postsArr as $item) {
            Post::create($item);
        }
        dd('posts created succesfully');
    }

    public function update()
    {
        $post = Post::find(6);
        $post->update([
           'title' => 'updated',
           'content' => 'updated',
           'image' => 'updated',
           'likes' => 110000,
           'is_published' => 0,
        ]);

        dd('posts updated succesfully');

    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
//        $post->delete([
//            'title' => 'updated',
//            'content' => 'updated',
//            'image' => 'updated',
//            'likes' => 110000,
//            'is_published' => 0,
//        ]);
        dd('posts deleted succesfully');
    }
    //
}
