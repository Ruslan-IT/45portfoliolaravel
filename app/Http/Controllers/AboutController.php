<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::firstOrFail();

        $seo = [
            'title' => $about->seo_title,
            'description' => $about->seo_description,
            'keywords' => $about->seo_keywords,
        ];

        return view('pages.about', compact('about', 'seo'));
    }


}
