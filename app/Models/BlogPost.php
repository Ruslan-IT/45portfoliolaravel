<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = [

        'title',
        'slug',
        'category',
        'image',
        'published_at',
        'excerpt',
        'content',
        'is_published',

        'seo_title',
        'seo_description',
        'seo_keywords'

    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
