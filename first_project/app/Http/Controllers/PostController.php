<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
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

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',

        ]);
        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = \request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',

        ]);
        $post->update($data);
        return redirect()->route('posts.show', $post->id);
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
//        $posts->delete([
//            'title' => 'updated',
//            'content' => 'updated',
//            'image' => 'updated',
//            'likes' => 110000,
//            'is_published' => 0,
//        ]);
        dd('posts deleted succesfully');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    //firstOrCreate
    //updateOrCreate

    public function firstOrCreate()
    {

         $post = [
             'title' => 'some title',
            'content' => 'some content',
            'image' => 'some image',
            'likes' => 11999,
            'is_published' => 0,
         ];
//        dump($posts->content);
         Post::firstOrCreate([
            'title' => 'some title',
        ],
        [
                 'title' => 'some title',
                 'content' => 'some content',
                 'image' => 'some image',
                 'likes' => 11999,
                 'is_published' => 0,
        ],
        );
        dump($post);
        dd('posts firstOrCreate succesfully');
    }

    public function updateOrCreate()
    {
        $post = [
            'title' => 'some updating title',
            'content' => 'some updating content',
            'image' => 'some updating image',
            'likes' => 11124,
            'is_published' => 0,
        ];
//        dump($posts->content);
        Post::updateOrCreate([
            'title' => 'some title',
        ],
            $post
        );
        dump($post);
        dd('posts updateOrCreate succesfully');
    }
}
