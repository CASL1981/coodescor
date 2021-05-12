<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class PhotoController extends Controller
{
    public function Store(Post $post)
    {
        // validamos el tipo de archivos y el tamaño de la imagen
        $this->validate(request(),[
            'photo' => 'required|image|max:2048|dimensions:min_width=1680,min_height=900',
        ]);

        //capturamos el achivo enviado
        $photo = request()->file('photo')->store('news');
        
        $post->photo = $photo;
        $post->save();
    }

    public function StoreNews(Noticia $news)
    {
        // validamos el tipo de archivos y el tamaño de la imagen
        $this->validate(request(),[
            'photo' => 'required|image|max:2048|dimensions:min_width=1680,min_height=900',
        ]);

        //capturamos el achivo enviado
        $photo = request()->file('photo')->store('news');
        
        $news->photo = $photo;
        $news->save();
    }

    public function destroy(Post $post)
    {
        Storage::delete($post->photo);

        $post->photo = null;
        $post->title = $post->title;
        $post->save();

        return back()->with('success', 'Foto Eliminada');
    }

    public function deleteNews(Noticia $news)
    {
        Storage::delete($news->photo);

        $news->photo = null;
        $news->title = $news->title;
        $news->save();

        return back()->with('success', 'Foto Eliminada');
    }
}
