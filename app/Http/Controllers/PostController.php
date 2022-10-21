<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts', compact('posts'));
    }
    public function create(){
        $postsArr = [
            [
                'title' => 'post 1',
                'content' => 'content 1',
                'image' => 'image 1',
                'likes' => 10,
                'is_published' => 1
            ],
            [
                'title' => 'post 2',
                'content' => 'content 2',
                'image' => 'image 2',
                'likes' => 20,
                'is_published' => 0
            ],
            [
                'title' => 'post 3',
                'content' => 'content 3',
                'image' => 'image 3',
                'likes' => 30,
                'is_published' => 1
            ],
            [
                'title' => 'post 4',
                'content' => 'content 4',
                'image' => 'image 4',
                'likes' => 40,
                'is_published' => 0
            ],[
                'title' => 'post 5',
                'content' => 'content 5',
                'image' => 'image 5',
                'likes' => 50,
                'is_published' => 1
            ],
            [
                'title' => 'post 6',
                'content' => 'content 6',
                'image' => 'image 6',
                'likes' => 60,
                'is_published' => 0
            ],
            [
                'title' => 'post 7',
                'content' => 'content 7',
                'image' => 'image 7',
                'likes' => 70,
                'is_published' => 1
            ],
            [
                'title' => 'post 8',
                'content' => 'content 8',
                'image' => 'image 8',
                'likes' => 80,
                'is_published' => 0
            ]
        ];

        foreach ($postsArr as $item) {
            Post::create($item);
        }
    }
    public function update(){
        $post = Post::find(10);
        $post->update([
            'title' => 'post 8',
            'content' => 'content 8',
            'image' => 'image 8',
            'likes' => 68,
            'is_published' => 0
        ]);
    }
    public function delete(){
        $post  = Post::find(7);
        $post->delete();
        dd('delete');
    }
    // first or create
    public function firstOrCreate(){
        $postAdd = [
            'title' => 'post 9',
            'content' => 'content 9',
            'image' => 'image 9',
            'likes' => 90,
            'is_published' => 1       
        ];
        $key1 = array_key_first($postAdd);
        $val1 = $postAdd[$key1];
        $str = [$key1 => $val1];

        $newPost = Post::firstOrCreate($str, $postAdd);
        dump($newPost);
        dd('first or create');
    }
    // update or create
    public function updateOrCreate(){
        $postAdd = [
            'title' => 'post 10',
            'content' => 'content 10',
            'image' => 'image 10',
            'likes' => 100,
            'is_published' => 0       
        ];
        $updPost = Post::updateOrCreate(['title' => $postAdd['title']], $postAdd);
        dd($updPost);
        dd('update or create');
    }
}
