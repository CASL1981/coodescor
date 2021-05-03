<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $photo = request()->file('photo')->store('blog');
        
        Photo::create([
            'url' => $photo,
            'post_id' => $post->id
        ]);
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        Storage::delete($photo->url);

        return back()->with('success', 'Foto Eliminada');
    }
}
