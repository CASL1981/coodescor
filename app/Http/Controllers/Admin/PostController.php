<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('administrator.blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::all();
        // $tags = Tag::all();

        // return view('administrator.blog.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required'
        ]);
        
        $post = Post::create([
            'title' => $request->title,
            'url' => Str::slug($request->title),
        ]);
        
        return redirect()->route('posts.edit', $post);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('administrator.blog.edit', compact('categories', 'tags', 'post'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //validamos los request
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'category' => 'required',
            'tags' => 'required',
            ]);

        
        //actualizamos el post    
        $post->title = $request->title;
        $post->url = Str::slug($request->title);
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->published_at = $request->has('published_at') ? Carbon::parse($request->published_at) : null;
        $post->category_id = $request->category;
        $post->save();
    
        //Guardamos los tags
        $post->tags()->sync($request->tags);
    
        return redirect()->route('posts.edit', $post)->with('success', 'Tu publicación ha sido actualizada');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
