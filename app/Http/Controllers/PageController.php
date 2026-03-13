<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contacts()
    {
        $siteSettings = SiteSetting::first();
        return view('pages.contacts', compact( 'siteSettings'));
    }

    public function city(City $city)
    {
        $works = $city->works()->latest()->take(6)->get();
        $posts = $city->posts()->latest()->take(6)->get();

        return view('city.show', compact('city','works','posts'));
    }
}
