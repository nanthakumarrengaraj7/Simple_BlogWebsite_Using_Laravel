<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    //
    // public function greetings()
    // {
    //     return "Good Morning Nanthu";
    // }

    // public function post()
    // {
    //     return "postDetails";
    // }

    // public function postId($id)
    // {
    //     return "postId:" . $id;
    // }

    // ReDirects

    // public function newUrl()
    // {
    //     return "<h1>New Url Page!</h1>";
    // }
    // public function oldUrl()
    // {
    //     return redirect('/newurl');
    // }



    // NamedRoute

    // public function newUrl()
    // {
    //     return "new Page";
    // }
    // public function oldUrl()
    // {
    //     return redirect()->route('newPage');
    // }


    // Blog Website

    public function index()
    {
        $title = "NKR Code";
        $posts = $this->getPosts();
        return view('posts.index', compact('title', 'posts'));
    }

    private function getPosts()
    {
        return json_decode(json_encode([ //array to object ah convert panna like decode panni encode pannanum
            ['id' => 1, 'title' => 'post 1', 'content' => 'content of post 1'],
            ['id' => 2, 'title' => 'post 2', 'content' => 'content of post 2'],
            ['id' => 3, 'title' => 'post 3', 'content' => 'content of post 3']
        ]));
    }

    public function detail($id)
    {
        $posts = $this->getPosts();
        $post = collect($posts)->firstWhere('id', $id);
        return view('posts.detail', compact('post'));
    }
}
