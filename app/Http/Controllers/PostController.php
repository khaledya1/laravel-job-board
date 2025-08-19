<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        // Fetch all data from the database
        $posts = Post::all();
        return view('post.index' ,["pageTitle" => "Blog" , 'posts' => $posts ]);
    }

    function create(){
        $post = Post::create([
            'title' => 'My Second Post',
            'body' => 'This is my words.',
            'published' => false,
            'author' => 'Mohamed'
        ]);

        return redirect('/blog');
    }

    function show($id){
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post , "pageTitle" => $post -> author]);
    }
}
