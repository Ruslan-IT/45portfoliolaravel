<?php

namespace App\Services;

use App\Models\Work;
use App\Models\WorkPage;

class WorkService
{


    public function getWorkPageData()
    {
        $works = Work::orderBy('created_at', 'desc')->get();
        $worksSeo = WorkPage::firstOrFail();

        return [
            'works' => $works,
            'worksSeo' => $worksSeo
        ];

    }

    public function getWorkPage($slug)
    {

        return [
            'work' => Work::where('slug', $slug)->firstOrFail(),
        ];
    }



}
