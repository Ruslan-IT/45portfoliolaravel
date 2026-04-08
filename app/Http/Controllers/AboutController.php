<?php

namespace App\Http\Controllers;

use App\Services\AboutService;


class AboutController extends Controller
{

    public function index(AboutService $service)
    {

        $about = $service->getAboutPage();
        return view('pages.about', $about);
    }


}
