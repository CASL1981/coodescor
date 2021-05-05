<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
        $posts = $tag->Posts()->paginate(4);
        $categories = Category::all();

        return view('pages.postsTags', compact('posts', 'tag', 'categories'));
    }
}
