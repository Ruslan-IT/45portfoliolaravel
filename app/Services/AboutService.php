<?php

namespace App\Services;

use App\Models\About;

class AboutService
{


    public function getAboutPage()
    {

        $about = About::firstOrFail();


        return [
            'about' => $about,
            'seo' =>$about->getSeo(),
        ];

    }

}
