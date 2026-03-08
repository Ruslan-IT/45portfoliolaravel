<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'sort',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];
}
