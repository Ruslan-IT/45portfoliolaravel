<?php

namespace App\Services;

use App\Models\Service;
use App\Models\ServicePage;

class ServicePageService
{

    public function getServicePages()
    {
        $services = Service::orderBy('sort')->get();
        $page = ServicePage::first();

        return[
            'services' => $services,
            'page' => $page,
        ];

    }

}
