<?php

namespace App\Http\Controllers;

use App\Services\ServicePageService;


class ServiceController extends Controller
{

    public function index(ServicePageService $servicePageService)
    {
        return view('pages.services', $servicePageService->getServicePages());
    }

}
