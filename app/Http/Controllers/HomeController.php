<?php

namespace App\Http\Controllers;

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
        $title = 'Catalog';


        $siteSettings = SiteSetting::first();

        // Получаем случайные категории для блока категорий
        $categoriesRandom = Category::inRandomOrder()->get();

        // Получаем случайные продукты для блока выгодных предложений (например 5)
        $deals = Product::inRandomOrder()->take(8)->get();
        $products = Product::inRandomOrder()->take(30)->get();


        $sections = Section::where('is_active', true)
            ->orderBy('order')
            ->with('items')
            ->get();

        $homePage = HomePage::first();

        $works = Work::latest()->take(3)->get();

        return view('pages.index', compact(
            'title',
            'categoriesRandom',
            'deals',
            'siteSettings',
            'products',
            'homePage',
            'sections',
            'works'
        ));
    }

}
