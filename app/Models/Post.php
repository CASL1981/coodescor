<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'url', 'excerpt', 'body', 'published_at'];

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

    public function scopePublished($query)
    {
        $query->whereNotNull('published_at')
                ->where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'DESC');
    }
}
