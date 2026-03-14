<?php

namespace App\Services;

use App\Models\About;

class AboutService
{

    public function getAboutPage()
    {
        $about = About::firstOrFail();

        $seo = [
            'title' => $about->seo_title,
            'description' => $about->seo_description,
            'keywords' => $about->seo_keywords,
        ];

        return [
            'about' => $about,
            'seo' => $seo,
        ];

    }

}
