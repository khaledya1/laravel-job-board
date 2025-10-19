<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::cursorPaginate(15); 
        return view('tag.index', [
            "pageTitle" => "Tags",
            'tags' => $tags
        ]);
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
        $tag = Tag::findOrFail($id);
        return view('tag.show', [
            'tag' => $tag,
            "pageTitle" => $tag->title
        ]);
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
