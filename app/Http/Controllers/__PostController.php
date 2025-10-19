<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

// class PostController extends Controller
{
    function index()
    {
        // Fetch all data from the database
        $posts = Post:: cursorPaginate(10);
        return view('post.index' ,["pageTitle" => "Blog" , 'posts' => $posts ]);
    }

    function create(){
        Post::factory(10)->create();
        return response(['message'=> 'successfuly created','createdCount'=> 10]);
    }

    function show($id){
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post , "pageTitle" => $post -> author]);
    }

    function destroy($id) {
    $post = Post::findOrFail($id);
    $post->delete();
    return response(['message'=> 'successfuly deleted']);

    }

}
