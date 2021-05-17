<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $posts = $category->Posts()->paginate(4);
        $categories = Category::all();
        $recentposts = Post::published()->latest()->take(3)->get();

        return view('pages.postsCategories', compact('posts', 'category', 'categories', 'recentposts'));
    }
}
