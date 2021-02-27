<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home()
    {
        return view('welcome');
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
}
