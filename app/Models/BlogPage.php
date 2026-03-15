<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPage extends Model
{
    protected $fillable = [
        'h1',
        'text1',
        'text2',
        'seo_title',
        'seo_description',
        'seo_keywords'
    ];
}
