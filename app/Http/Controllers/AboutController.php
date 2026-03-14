<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\BlogPost;
use App\Services\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private AboutService  $service;

    public function __construct(AboutService $service)
    {
        $this->service = $service;
    }

    public function index()
    {

        $about = $this->service->getAboutPage();

        return view('pages.about', $about);
    }


}
