<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

{
    function index()
    {
        // Fetch all data from the database
        $comments = Comment::cursorPaginate(15);
        return view('comment.index' ,["pageTitle" => "Blog" , 'comments' => $comments ]);
    }

    function create(){
        Comment::factory(10)->create();
        return response(['message'=> 'successfuly created','createdCount'=> 10]);
    }

    function show($id){
        $comment = comment::findOrFail($id);
        return view('comment.show', ['comment' => $comment , "pageTitle" => $comment -> author]);
    }

    function destroy($id) {
    $comment = comment::findOrFail($id);
    $comment->delete();
    return response(['message'=> 'successfuly deleted']);
    }
}
