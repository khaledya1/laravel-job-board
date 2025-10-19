<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

{
    function index()
    {
        $tags = Tag::cursorPaginate(15); 
        return view('tag.index', [
            "pageTitle" => "Tags",
            'tags' => $tags
        ]);
    }

    function create()
    {
        Tag::factory(10)->create();
        return response(['message'=> 'successfuly created','createdCount'=> 10]);
    }

    function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.show', [
            'tag' => $tag,
            "pageTitle" => $tag->title
        ]);
    }

    function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return response(['message'=> 'successfuly deleted']);

    }

// public function testManyToMany()
{
    $posts = Post::all();
    $tags  = Tag::all()->pluck('id')->toArray();

    foreach ($posts as $post) {
        $randomTags = collect($tags)->random(rand(1, count($tags)))->toArray();
        $post->tags()->syncWithoutDetaching($randomTags);
    }

        return response(['message'=> 'successfuly added']);

}
}
