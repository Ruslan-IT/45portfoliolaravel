<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use App\Models\HomePage;
use App\Models\Product;
use App\Models\Section;
use App\Models\SiteSetting;
use App\Models\Work;

class HomeController
{

    public function index()
    {

        $siteSettings = SiteSetting::first();


        $sections = Section::where('is_active', true)
            ->orderBy('order')
            ->with('items')
            ->get();

        $homePage = HomePage::first();

        $works = Work::latest()->take(3)->get();

        $posts = BlogPost::where('is_published', true)
            ->latest('published_at')
            ->take(2)
            ->get();

        return view('pages.index', compact(
            'siteSettings',
            'homePage',
            'sections',
            'works',
            'posts'
        ));
    }

}
