<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        $posts = $category->Posts()->paginate(4);
        $categories = Category::all();

        return view('pages.postsCategories', compact('posts', 'category', 'categories'));
    }
}
