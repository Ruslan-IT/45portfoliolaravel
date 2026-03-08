<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $fillable = [
        'title',
        'description',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];
}
