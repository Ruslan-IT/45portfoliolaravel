<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SiteSetting;

class CategoryController extends Controller
{
    // /category
    public function index()
    {
        $siteSettings = SiteSetting::first();

        $categories = Category::with('children')->get();
        $products = Product::latest()->take(20)->get();



        return view('pages.categories', compact(
            'categories',
            'products',
            'siteSettings'
        ));
    }

    // /category/{slug}
    public function show(string $slug)
    {
        $siteSettings = SiteSetting::first();

        $category = Category::with('children')
            ->where('slug', $slug)
            ->firstOrFail();

        $categoryIds = $category->children
            ->pluck('id')
            ->push($category->id);

        $products = Product::whereIn('category_id', $categoryIds)->get();




        return view('pages.category', compact(
            'category',
            'products',
            'siteSettings'
        ));
    }
}
