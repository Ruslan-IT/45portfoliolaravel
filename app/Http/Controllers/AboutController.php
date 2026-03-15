<?php

namespace App\Http\Controllers;

use App\Services\AboutService;


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
