<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        return view('pages.home');
    }

    public function blog()
    {
        return view('pages.blog');
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
        return view('pages.partner');
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
