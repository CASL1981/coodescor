<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryNews;
use App\Models\Noticia;
use App\Models\Partner;
use App\Models\Post;

class PagesController extends Controller
{
    public function home()
    {
        $posts = Post::published()->latest()->take(3)->get();
        $noticias = Noticia::published()->latest()->take(3)->get();
        // $categories = Category::all();

        return view('welcome', compact('posts', 'noticias'));
    }

    public function blog()
    {
        $posts = Post::published()->paginate(4);
        $categories = Category::all();
        $recentposts = Post::published()->latest()->take(3)->get();

        return view('pages.blog', compact('posts', 'categories', 'recentposts'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function post(Post $post)
    {   
        if($post->isPublished() || auth()->check())
        {
            $categories = Category::all();
            $recentposts = Post::published()->latest()->take(3)->get();
    
            return view('pages.post', compact('post','categories', 'recentposts'));
        }

        abort(404);
    }

    public function news(Noticia $news)
    {       
        $categories = Category::all();        
        $recentnews = Noticia::published()->latest()->take(3)->get();

        return view('pages.news', compact('news','categories', 'recentnews'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function partner()
    {
        $partners = Partner::orderBy('order')->get();

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

    public function pagesNews()
    {
        $news = Noticia::published()->paginate(4);
        $categories = CategoryNews::all();
        $recentnews = Noticia::published()->latest()->take(3)->get();

        return view('pages.pagesNews', compact('news', 'categories', 'recentnews'));
    }
}
