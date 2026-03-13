<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [

        'title',
        'slug',
        'image',
        'overview',

        'category',
        'awards',
        'client',
        'year',

        'objectives',
        'gallery',

        'testimonial_text',
        'testimonial_author',

        'seo_title',
        'seo_description',
        'seo_keywords'

    ];

    protected $casts = [

        'objectives' => 'array',
        'gallery' => 'array',

    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
