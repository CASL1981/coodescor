<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryNews extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url'];

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function News()
    {
        return $this->hasMany(Noticia::class);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['url'] = Str::slug($name);
    }
}
