<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Partner;
use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blog()
    {
        $posts = Post::orderBy('published_at')->get();
        $categories = Category::all();
        $posts_recent = Post::latest()->take(3)->get();

        return view('pages.blog', compact('posts', 'categories', 'posts_recent'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function post()
    {
        return view('pages.post');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function partner()
    {
        $partners = Partner::where('status', true)->orderBy('order')->get();

        return view('pages.partner', compact('partners'));
    }

    public function services()
    {
        return view('pages.services');
    }

    public function PQRS()
    {
        return view('pages.pqrs');
    }

    public function news()
    {
        return view('pages.news');
    }
}
