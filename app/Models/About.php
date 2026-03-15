<?php

namespace App\Models;

use App\Traits\HasSeo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class About extends Model
{
    use HasFactory;

    use HasSeo;



    protected $fillable = [
        'title',
        'description',
        'skills',
        'coding_skills',
        'experiences',
        'education',
        'testimonials',
        'hours_of_works',
        'projects_done',
        'satisfied_customers',
        'awards_winning',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];

    protected $casts = [
        'skills' => 'array',
        'coding_skills' => 'array',
        'experiences' => 'array',
        'education' => 'array',
        'testimonials' => 'array',
    ];

}
