<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contacts()
    {
        $siteSettings = SiteSetting::first();
        return view('pages.contacts', compact( 'siteSettings'));
    }
}
