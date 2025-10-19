<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::cursorPaginate(15);
        return view('comment.index' ,["pageTitle" => "Blog" , 'comments' => $comments ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //@todo
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@todo
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = comment::findOrFail($id);
        return view('comment.show', ['comment' => $comment , "pageTitle" => $comment -> author]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //@todo
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //@todo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //@todo
    }
}
