<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\BlogPost;
use App\Models\Service;
use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {


        $services = Service::orderBy('sort')->get();
        $page = ServicePage::first();

        return view('pages.services', compact('services', 'page'));
    }


}
