<?php

namespace App\Http\Controllers;

use App\Models\CategoryNews;
use App\Models\Noticia;

class CategoryNewsController extends Controller
{
    //
    public function show(CategoryNews $category)
    {
        $news = $category->News()->paginate(4);        
        $categories = CategoryNews::all();
        $recentnews = Noticia::published()->latest()->take(3)->get();

        return view('pages.newsCategories', compact('news', 'category', 'categories', 'recentnews'));
    }
}
