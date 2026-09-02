<?php

namespace App\Models;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     use HasFactory;

    protected static function newFactory(): Factory
    {
        return ArticleFactory::new();
    }

    protected $fillable = ['title', 'slug', 'content','image','tags','views','description','keywords'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($article) {
            $article->slug = Str::slug($article->title);
        });
        static::updating(function ($article) {
            $article->slug = Str::slug($article->title);
        });
    }
}
