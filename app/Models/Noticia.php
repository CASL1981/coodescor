<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Noticia extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'excerpt', 'body', 'published_at', 'category_id'];

    protected $dates = ['published_at'];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function Photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublished($query)
    {
        $query->whereNotNull('published_at')
                ->where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'DESC');
    }

    public function setNameAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['url'] = Str::slug($title);
    }

    public function setPublishedAtAttribute($published_at)
    {
        $this->attributes['published_at'] = $published_at ? Carbon::parse($published_at) : null;
    }

    public function setCategoryIdAttribute($category_id)
    {
        $this->attributes['category_id'] = Category::find($category_id) ? $category_id : Category::create(['name' => $category_id])->id;
    }

    public function syncTags($tags)
    {
        $tagIds = collect($tags)->map(function($tag){
            return Tag::find($tag) ? $tag : Tag::create(['name' => $tag])->id;
        });
        
        $this->tags()->sync($tagIds);
    }
}
